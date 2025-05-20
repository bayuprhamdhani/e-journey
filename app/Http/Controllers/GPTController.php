<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use App\Models\AnswerDream;
use App\Models\ReccomendMajor;
use App\Models\QuestionDream;
use App\Models\ScoreIntelligence;
use App\Models\IntelligenceType;
use App\Models\OptionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Advice;
use Illuminate\Support\Facades\File;
class GPTController extends Controller
{
    public function index()
    {
        return view('advice.consultation');
    }

    public function dream()
    {
        return view('advice.dream');
    }

    public function motivation()
    {
        return view('advice.motivation');
    }

    public function generate(Request $request)
    {
        $user = Auth::user();
        $student = $user->student ?? null;
        $dream = $student->dream ?? 'menggapai impian yang luar biasa';
    
        $isAutoGreet = $request->input('auto_greet') == 'true' || $request->input('auto_greet') === true;
        $originalPrompt = $request->input('prompt');
    
        if (!$originalPrompt && !$isAutoGreet) {
            return response()->json(['output' => 'Prompt kosong.'], 400);
        }
        $studentName = $student->name ?? 'Peserta Hebat';    
        if ($isAutoGreet) {
            $finalPrompt = "Kamu adalah guru sekaligus teman berbincang untuk \"$studentName\" segala hal yang asik dan sefrekuensi anak muda. "
                         . "Buat sapaan awal asik"
                         . "Gunakan maksimal 50 kata.";
        } else {
            $finalPrompt = "Jawablah sebagai guru sekaligus teman berbincang segala hal yang asik dan sefrekuensi anak muda."
                         . "Jangan sapa \"$studentName\" lagi. "
                         . "Jawaban maksimal 50 kata. "
                         . "Pertanyaan: $originalPrompt";
        }
    
        $cacheKey = 'gpt_response_' . md5($finalPrompt);
    
        if (Cache::has($cacheKey)) {
            $output = Cache::get($cacheKey);
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4.1',
                'messages' => [['role' => 'user', 'content' => $finalPrompt]],
                'temperature' => 0.7,
                'max_tokens' => 100,
            ]);
    
            $result = $response->json();
    
            if (!isset($result['choices'][0]['message']['content'])) {
                \Log::error('GPT Error:', $result);
                return response()->json(['output' => 'AI tidak membalas.'], 500);
            }
    
            $output = $result['choices'][0]['message']['content'];
            Cache::put($cacheKey, $output, now()->addHours(24));
        }
    
        if (!$isAutoGreet) {
            session()->put('last_user_message', $originalPrompt);
            session()->put('last_assistant_reply', $output);
        }
    
        return response()->json(['output' => $output]);
    }
    

    public function generate2(Request $request)
    {
        $user = Auth::user();
        $student = $user->student ?? null;
        $studentName = $student->name ?? 'Peserta Hebat';
    
        $index = (int) $request->input('index', 0);
    

$question = QuestionDream::orderBy('id')->skip($index)->first();

if (!$question) {
    $userId = Auth::id();

    // Ambil semua skor total per intelligence_type
    $scores = DB::table('answer_dreams')
        ->join('question_dreams', 'answer_dreams.question_dream', '=', 'question_dreams.id')
        ->join('option_answers', 'answer_dreams.option_answer', '=', 'option_answers.id')
        ->select('question_dreams.intelligence_type', DB::raw('SUM(option_answers.score) as total_score'))
        ->where('answer_dreams.user', $userId)
        ->groupBy('question_dreams.intelligence_type')
        ->get();

    foreach ($scores as $score) {
        DB::table('score_intelligences')->updateOrInsert(
            [
                'student' => $userId,
                'intelligence' => $score->intelligence_type,
            ],
            [
                'score' => $score->total_score,
                'updated_at' => now(),
                'created_at' => now(), // hanya akan dipakai jika insert
            ]
        );
    }

    // Ambil intelligence_type dengan skor tertinggi
    $typeId = $scores->sortByDesc('total_score')->first()->intelligence_type ?? null;

    $typeName = \App\Models\IntelligenceType::find($typeId)?->intelligence_type ?? 'Tidak diketahui';

    $recommendedMajors = \App\Models\ReccomendMajor::where('intelligence_type', $typeId)
        ->pluck('reccomend_major');

    return response()->json([
        'done' => true,
        'intelligence_type' => $typeName,
        'recommended_majors' => $recommendedMajors
    ]);
}


        
        
        // Kirim ke GPT untuk modifikasi pertanyaan
        $originalQuestion = $question->question_dream;
        $prompt = 
            <<<PROMPT
                Kamu berperan sebagai guru sekaligus teman ngobrol bagi siswa bernama "$studentName". Tugasmu adalah membuat pertanyaan dengan ketentuan:

                - Gaya bahasa santai, menarik, dan relevan untuk anak muda
                - Berbentuk kalimat tanya
                - ditutup dengan emoji
                - Mengandung **hanya satu** tanda tanya
                - Tidak boleh ada teks apa pun setelah tanda tanya

                pertanyaan tersebut jawabannya adalah ya atau tidak dari pernyataan : "$originalQuestion"
            PROMPT;

        $response = Http::withToken(env('OPENAI_API_KEY'))->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4.1',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
            'temperature' => 0.5,
        ]);
    
        $modifiedQuestion = $response['choices'][0]['message']['content'] ?? $originalQuestion;
    
        $options = OptionAnswer::all()->map(function ($option) {
            return [
                'id' => $option->id,
                'text' => $option->option_answer,
                'score' => $option->score
            ];
        });
        
        return response()->json([
            'index' => $index,
            'id' => $question->id,
            'question' => trim($modifiedQuestion),
            'options' => $options
        ]);
    }
    
        
    public function generate3(Request $request)
    {
        $user = Auth::user();
        $student = $user->student ?? null;
        $studentName = $student->name ?? 'Peserta Hebat';
        $dream = $student->dream ?? 'menggapai impian yang luar biasa';
    
        $isAutoGreet = $request->input('auto_greet') == 'true' || $request->input('auto_greet') === true;
        $originalPrompt = $request->input('prompt');
    
        if (!$originalPrompt && !$isAutoGreet) {
            return response()->json(['output' => 'Prompt kosong.'], 400);
        }
    
        if ($isAutoGreet) {
            $finalPrompt = "Kamu adalah guru motivator yang keren dan sefrekuensi anak muda. "
                         . "Buat sapaan awal hangat, menyebut \"$studentName\", dan beri motivasi singkat tentang impiannya \"$dream\". "
                         . "Gunakan maksimal 50 kata.";
        } else {
            $finalPrompt = "Jawablah sebagai guru dan motivator muda yang bijak, relevan dengan impian \"$dream\". "
                         . "Jangan sapa \"$studentName\" lagi. "
                         . "Jawaban maksimal 50 kata. "
                         . "Pertanyaan: $originalPrompt";
        }
    
        $cacheKey = 'gpt_response_' . md5($finalPrompt);
    
        if (Cache::has($cacheKey)) {
            $output = Cache::get($cacheKey);
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4.1',
                'messages' => [['role' => 'user', 'content' => $finalPrompt]],
                'temperature' => 0.7,
                'max_tokens' => 100,
            ]);
    
            $result = $response->json();
    
            if (!isset($result['choices'][0]['message']['content'])) {
                \Log::error('GPT Error:', $result);
                return response()->json(['output' => 'AI tidak membalas.'], 500);
            }
    
            $output = $result['choices'][0]['message']['content'];
            Cache::put($cacheKey, $output, now()->addHours(24));
        }
    
        if (!$isAutoGreet) {
            session()->put('last_user_message', $originalPrompt);
            session()->put('last_assistant_reply', $output);
        }
    
        return response()->json(['output' => $output]);
    }



    public function store(Request $request)
    {
        $user = Auth::user();
        $studentId = $user->student->id ?? null;
    
        if (!$studentId) {
            return response()->json(['message' => 'Tidak ada siswa terhubung'], 400);
        }
    
        $adviceText = $request->input('advice');
    
        Advice::create([
            'user' => $studentId,
            'advice' => $adviceText,
            'date' => now()->toDateString(),
            'status' => 1,
        ]);
    
        return response()->json(['message' => 'Nasihat berhasil disimpan.']);
    }
    
    public function saveAnswer(Request $request)
    {
        $user = Auth::user();
    
        $questionId = $request->input('question_id');
        $answerId = $request->input('answer_id');
    
        if (!$user || !$questionId || !$answerId) {
            return response()->json(['message' => 'Data tidak lengkap'], 400);
        }
    
        AnswerDream::create([
            'user' => $user->id,
            'question_dream' => $questionId,
            'option_answer' => $answerId
        ]);
    
        return response()->json(['message' => 'Jawaban disimpan']);
    }
    

public function storeAnswerDream(Request $request)
{
    $user = Auth::user();
    $studentId = $user->student->id ?? null;

    if (!$studentId) {
        return response()->json(['message' => 'Siswa tidak ditemukan'], 400);
    }

    AnswerDream::create([
        'user' => $studentId,
        'question_dream' => $request->input('question'),
        'option_answer' => $request->input('answer'),
        'date' => now(),
    ]);

    return response()->json(['message' => 'Jawaban berhasil disimpan']);
}

public function setDream(Request $request)
{
    $user = Auth::user();
    $student = $user->student;

    if (!$student) {
        return response()->json(['message' => 'Data siswa tidak ditemukan.'], 404);
    }

    $dream = $request->input('dream');
    $student->dream = $dream;
    $student->save();

    $now = Carbon::now();
    $currentMonth = $now->month;
    $currentYear = $now->year;

    $angkatan = (int) $student->graduate;
    $selisihTahun = $currentYear - $angkatan;

    $currentSemester = match ($selisihTahun) {
        1 => ($currentMonth <= 6 ? 1 : 2),
        2 => ($currentMonth <= 6 ? 3 : 4),
        3 => ($currentMonth <= 6 ? 5 : 6),
        default => 1,
    };

    $bulanTugas = [];

    for ($smt = $currentSemester; $smt <= 6; $smt++) {
        $isGanjil = $smt % 2 == 1;
        $bulanAwal = $isGanjil ? 7 : 1;
        $bulanAkhir = $isGanjil ? 12 : 6;
        $tahunSemester = $angkatan + intdiv($smt - 1, 2);

        for ($bln = $bulanAwal; $bln <= $bulanAkhir; $bln++) {
            if ($smt == $currentSemester && $tahunSemester == $currentYear && $bln < $currentMonth) {
                continue;
            }

            $bulanTugas[] = [
                'semester' => $smt,
                'month' => $bln,
                'year' => $tahunSemester,
            ];
        }
    }

    return response()->json([
        'message' => 'Impian berhasil disimpan.',
        'tasks_plan' => $bulanTugas,
    ]);
}



public function generateTask(Request $request)
{
    $user = Auth::user();
    $student = $user->student;

    if (!$student) {
        return response()->json(['message' => 'Data siswa tidak ditemukan.'], 404);
    }

    $dream = $request->input('dream');
    $student->dream = $dream;
    $student->save();

    $now = Carbon::now();
    $currentMonth = $now->month;
    $currentYear = $now->year;

    $angkatan = (int) $student->graduate;
    $selisihTahun = $currentYear - $angkatan;

    $currentSemester = match($selisihTahun) {
        1 => ($currentMonth <= 6 ? 1 : 2),
        2 => ($currentMonth <= 6 ? 3 : 4),
        3 => ($currentMonth <= 6 ? 5 : 6),
        default => 1,
    };

    $bulanTugas = [];

    for ($smt = $currentSemester; $smt <= 6; $smt++) {
        $isGanjil = $smt % 2 == 1;
        $bulanAwal = $isGanjil ? 7 : 1;
        $bulanAkhir = $isGanjil ? 12 : 6;
        $tahunSemester = $angkatan + intdiv($smt - 1, 2);

        for ($bln = $bulanAwal; $bln <= $bulanAkhir; $bln++) {
            if ($smt == $currentSemester && $tahunSemester == $currentYear && $bln < $currentMonth) {
                continue;
            }

            $bulanTugas[] = [
                'semester' => $smt,
                'month' => $bln,
                'year' => $tahunSemester,
            ];
        }
    }

    try {
        foreach ($bulanTugas as $item) {
            $semester = $item['semester'];
            $bulan = $item['month'];
            $tahun = $item['year'];

            // 🔀 Prompt dengan variasi konteks (semester, bulan, tahun)
            $prompt = <<<PROMPT
Kamu adalah guru pembimbing siswa SMA yang ingin masuk jurusan "{$dream}".
Bulan ini adalah bulan ke-{$bulan} tahun {$tahun}, semester {$semester}.

Buatkan 12 tugas (untuk 1 bulan, 3 tugas per minggu) yang membantu siswa SMA mempersiapkan diri masuk jurusan tersebut melalui penguatan pelajaran sekolah seperti Matematika, Fisika, Kimia, Biologi, atau pelajaran relevan lainnya.

Setiap tugas harus:
* Berhubungan dengan pelajaran SMA yang relevan dengan jurusan tersebut.
* Bersifat realistis, kreatif, dan bisa dikerjakan siswa SMA.
* Ditandai dengan label tingkat kesulitan: (Sulit), (Agak Sulit), atau (Mudah).
* Format: Nomor. [Kalimat tugas] (Tingkat Kesulitan)

Contoh:
1. Kerjakan latihan soal tentang sistem pernapasan dari buku Biologi kelas 11 (Mudah)

Hasilkan hanya 12 tugas seperti itu.
PROMPT;

            $response = Http::withToken(env('OPENAI_API_KEY'))->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4.1',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.7,
            ]);

            $content = $response['choices'][0]['message']['content'] ?? null;

            if ($content) {
                $parsedTasks = preg_split('/\n+/', trim($content));
                $parsedTasks = array_filter($parsedTasks, fn($line) => preg_match('/^\d+\./', $line));
                $parsedTasks = array_slice($parsedTasks, 0, 12);

                $week = 1;
                $weekCounter = 0;

                foreach ($parsedTasks as $line) {
                    $score = 50;
                    if (stripos($line, '(Sulit)') !== false) {
                        $score = 100;
                    } elseif (stripos($line, '(Mudah)') !== false) {
                        $score = 25;
                    }

                    $taskText = preg_replace('/^\d+\.\s*/', '', $line);
                    $taskText = preg_replace('/\((Sulit|Agak Sulit|Mudah)\)/i', '', $taskText);

                    Task::create([
                        'task' => trim($taskText),
                        'score' => $score,
                        'user' => $user->id,
                        'semester' => $semester,
                        'month' => $bulan,
                        'week' => $week,
                    ]);

                    $weekCounter++;
                    if ($weekCounter >= 3) {
                        $week++;
                        $weekCounter = 0;
                    }
                }
            } else {
                return response()->json(['message' => "Gagal membuat tugas untuk bulan {$bulan} tahun {$tahun}."], 500);
            }
        }

        return response()->json(['message' => 'Impian dan semua tugas berhasil disimpan!']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Impian disimpan, tetapi gagal membuat tugas.', 'error' => $e->getMessage()], 200);
    }
}


public function generateTaskPerMonth(Request $request)
{
    $user = Auth::user();
    $student = $user->student;
    $dream = $student->dream;

    $semester = $request->input('semester');
    $month = $request->input('month');
    $year = $request->input('year');

    $prompt = <<<PROMPT
Kamu adalah guru pembimbing siswa SMA yang ingin masuk jurusan "$dream".
Buatkan 12 tugas (untuk 1 bulan, 3 tugas per minggu) yang membantu siswa SMA mempersiapkan diri masuk jurusan tersebut melalui penguatan pelajaran sekolah seperti Matematika, Fisika, Kimia, Biologi, atau pelajaran relevan lainnya.

Setiap tugas harus:

* Berhubungan dengan pelajaran SMA yang relevan dengan jurusan tersebut.
* Bersifat realistis, kreatif, dan bisa dikerjakan siswa SMA.
* Ditandai dengan label tingkat kesulitan: (Sulit), (Agak Sulit), atau (Mudah).
* Format: Nomor. [Kalimat tugas] (Tingkat Kesulitan)

Contoh:
1. Kerjakan latihan soal tentang sistem pernapasan dari buku Biologi kelas 11 (Mudah)

Hasilkan hanya 12 tugas seperti itu.
PROMPT;

    try {
        $response = Http::withToken(env('OPENAI_API_KEY'))->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4.1',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
            'temperature' => 0.7,
        ]);

        $content = $response['choices'][0]['message']['content'] ?? null;

        if ($content) {
            $parsedTasks = preg_split('/\n+/', trim($content));
            $parsedTasks = array_filter($parsedTasks, fn($line) => preg_match('/^\d+\./', $line));
            $parsedTasks = array_slice($parsedTasks, 0, 12);

            $week = 1;
            $weekCounter = 0;

            foreach ($parsedTasks as $line) {
                $score = 50;
                if (stripos($line, '(Sulit)') !== false) {
                    $score = 100;
                } elseif (stripos($line, '(Mudah)') !== false) {
                    $score = 25;
                }

                $taskText = preg_replace('/^\d+\.\s*/', '', $line);
                $taskText = preg_replace('/\((Sulit|Agak Sulit|Mudah)\)/i', '', $taskText);

                Task::create([
                    'task' => trim($taskText),
                    'score' => $score,
                    'user' => $user->id,
                    'semester' => $semester,
                    'month' => $month,
                    'week' => $week,
                ]);

                $weekCounter++;
                if ($weekCounter >= 3) {
                    $week++;
                    $weekCounter = 0;
                }
            }

            return response()->json(['message' => "Tugas bulan $month semester $semester berhasil dibuat!"]);
        }

        return response()->json(['message' => 'Gagal membuat tugas.'], 500);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Terjadi kesalahan saat membuat tugas.'], 500);
    }
}

}
