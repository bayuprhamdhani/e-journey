<?php

namespace App\Http\Controllers;

use App\Models\AnswerDream;
use App\Models\ReccomendMajor;
use App\Models\QuestionDream;
use App\Models\IntelligenceType;
use App\Models\OptionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
            $typeId = QuestionDream::find(1)?->intelligence_type;
            $typeName = \App\Models\IntelligenceType::find($typeId)?->intelligence_type ?? 'Tidak diketahui';
            $recommendedMajors = \App\Models\ReccomendMajor::where('intelligence_type', $typeId)
            ->pluck('reccomend_major'); // ini akan menghasilkan array of string

return response()->json([
    'done' => true,
    'intelligence_type' => $typeName,
    'recommended_majors' => $recommendedMajors
]);
            
        }
        
        
        // Kirim ke GPT untuk modifikasi pertanyaan
        $originalQuestion = $question->question_dream;
        $prompt = "Kamu adalah guru sekaligus teman berbincang untuk \"$studentName\" segala hal yang asik dan sefrekuensi anak muda. Ubah pertanyaan berikut agar lebih santai dan menarik yang memberikan pertanyaan yang mengara ada jawaban iya atau tidak:\n\n\"$originalQuestion\"";
    
        $response = Http::withToken(env('OPENAI_API_KEY'))->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
            'temperature' => 0.7,
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

    return response()->json(['message' => 'Impian berhasil disimpan!']);
}

}
