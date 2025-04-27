<?php

namespace App\Http\Controllers\Trophy;
use App\Models\FinishedMajorTrophy;
use App\Models\FinishedGeneralTrophy;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Advice;
use App\Models\GeneralTrophy;
use App\Models\PinnedGeneralTrophy;
use App\Models\GeneralMark;
use App\Models\MajorTrophy;
use App\Models\PinnedMajorTrophy;
use App\Models\MajorMark;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Http\Controllers\Controller;

class TrophyController extends Controller
{
    
    public function index()
    {
        $userId = Auth::id(); // Ambil ID user yang sedang login
        $student = Auth::user()?->student;
    
        // Ambil data advices yang status = 2, milik user login
        $advices = Advice::where('user', $userId)
            ->where('status', 2)
            ->take(3)
            ->get();
    
        // Ambil data trophy umum
        $general_trophies = GeneralTrophy::with('committeeRelation')
            ->where('status', 2)
            ->take(3)
            ->get();
    
        $major_trophies = collect(); // Default kosong

        if ($student && $student->majorRelation) {
            $majorId = $student->majorRelation->id;
    
        $major_trophies = MajorTrophy::with('committeeRelation2')
            ->where('status', 2)
            ->where('major', $majorId) // Filter berdasarkan jurusan siswa
            ->take(3)
            ->get();
        }

        // Gabungkan general_trophies dan major_trophies menjadi popular_trophies
        $popular_trophies = $general_trophies->concat($major_trophies)->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date)); // Urutkan berdasarkan selisih hari
        })->take(3);
    
        // Cek apakah user memiliki relasi ke student
        $student = Auth::user()?->student;
    
        // Default major: Unknown
        $major = $student && $student->majorRelation ? $student->majorRelation->major : 'Unknown';
    
        // Inisialisasi default nilai semester
        $semesterMarks = collect();
    
        // Jalankan proses penghitungan nilai hanya jika ada student
        if ($student) {
            // Ambil data nilai dari general dan major
            $generalMarks = GeneralMark::where('student', $student->id)->get();
            $majorMarks = MajorMark::where('student', $student->id)->get();
    
            // Kelompokkan nilai berdasarkan semester
            $groupedGeneral = $generalMarks->groupBy('semester');
            $groupedMajor = $majorMarks->groupBy('semester');
    
            // Gabungkan semua semester yang muncul di kedua jenis nilai
            $semesters = $groupedGeneral->keys()
                ->merge($groupedMajor->keys())
                ->unique()
                ->sortDesc()
                ->take(3); // Ambil 3 semester terakhir (descending)
    
            // Loop per semester
            $semesterMarks = $semesters->map(function ($semesterId) use ($groupedGeneral, $groupedMajor) {
                $general = $groupedGeneral->get($semesterId, collect());
                $major = $groupedMajor->get($semesterId, collect());
    
                // Hitung total nilai dari daily_mark dan exam_mark
                $totalGeneral = $general->sum(fn($m) => $m->daily_mark + $m->exam_mark);
                $totalMajor = $major->sum(fn($m) => $m->daily_mark + $m->exam_mark);
    
                $total = $totalGeneral + $totalMajor;
                $count = $general->count() + $major->count();
                $average = $count > 0 ? round($total / $count, 2) : 0;
    
                return [
                    'semester' => $semesterId,
                    'total' => $total,
                    'count' => $count,
                    'average' => $average
                ];
            });
        }

        // Di dalam method index()
        $today = Carbon::today();

        // Ambil major pengguna yang login
        $userMajor = $student && $student->major ? $student->major : null;

        $today = now()->toDateString(); // atau gunakan Carbon::today()->toDateString();

        $today = Carbon::today();
        $startOfMonth = $today->copy()->startOfMonth();
        $endNextMonth = $today->copy()->addMonth()->endOfMonth();

        $nearestGeneral = GeneralTrophy::whereNotNull('date')
        ->whereBetween('date', [$startOfMonth, $endNextMonth])
        ->orderBy('date', 'asc') // atau tetap gunakan DATEDIFF kalau prefer
        ->take(3)
        ->get();

        // Ambil 3 major trophies terdekat yang sesuai dengan major user
        $nearestMajor = MajorTrophy::whereNotNull('date')
        ->whereBetween('date', [$startOfMonth, $endNextMonth])
        ->orderBy('date', 'asc') // atau tetap gunakan DATEDIFF kalau prefer
        ->when($userMajor, function ($query, $userMajor) {
            return $query->where('major', $userMajor);
        })
        ->get();


        // Gabungkan dan urutkan kembali berdasarkan selisih hari
        $nearest_trophies = $nearestGeneral->concat($nearestMajor)->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        })->take(3);
        ;

        $pinnedGeneralTrophies = PinnedGeneralTrophy::where('user', $userId)
        ->with('generalTrophy')
        ->get()
        ->pluck('generalTrophy')
        ->filter(function ($trophy) {
            return $trophy && $trophy->type == 2;
        });

        $pinnedMajorTrophies = PinnedMajorTrophy::where('user', $userId)
        ->with('majorTrophy')
        ->get()
        ->pluck('majorTrophy')
        ->filter(function ($trophy) {
            return $trophy && $trophy->type == 2;
        });

        // Tambahkan nama committee ke masing-masing trophy
        $pinnedGeneralTrophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
        });

        $pinnedMajorTrophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
        });

        // Gabungkan dan urutkan kembali berdasarkan selisih hari
        $pinned_trophies = $pinnedGeneralTrophies->concat($pinnedMajorTrophies)->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date)); // Urutkan berdasarkan tanggal
        })->take(3);
        // Kirim data ke dashboard
        return view('trophy.trophy', compact(
            'pinned_trophies',
            'advices',
            'popular_trophies',
            'major_trophies',
            'major',
            'nearest_trophies',
            'semesterMarks'
        ));
    }

    public function competition()
    {
        $userId = Auth::id(); // Ambil ID user yang sedang login
        $student = Auth::user()?->student;
    
        // Ambil data advices yang status = 2, milik user login
        $advices = Advice::where('user', $userId)
            ->where('status', 2)
            ->take(3)
            ->get();
    
        // Ambil data trophy umum dan relasi committee-nya
        $general_trophies = GeneralTrophy::with('committeeRelation')
        ->where('status', 2)
        ->where('type', 2)
        ->take(3)
        ->get();

        // Tambahkan nama committee dan set properti type = 'general'
        $general_trophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
            $trophy->type = 'general'; // Tambah properti 'type'
        });

        $major_trophies = collect(); // Default kosong

        if ($student && $student->majorRelation) {
            $majorId = $student->majorRelation->id;
            $major_trophies = MajorTrophy::with('committeeRelation2')
            ->where('status', 2)
            ->where('type', 2)
            ->where('major', $majorId)
            ->take(3)
            ->get();

            // Tambahkan nama committee dan set properti type = 'major'
            $major_trophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
            $trophy->type = 'major'; // Tambah properti 'type'
            });
        }

        // Gabungkan dan urutkan berdasarkan selisih hari
        $popular_trophies = $general_trophies
        ->concat($major_trophies)
        ->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        })
        ->take(3);
    
        // Cek apakah user memiliki relasi ke student
        $student = Auth::user()?->student;
    
        // Default major: Unknown
        $major = $student && $student->majorRelation ? $student->majorRelation->major : 'Unknown';
    
        // Inisialisasi default nilai semester
        $semesterMarks = collect();
    
        // Jalankan proses penghitungan nilai hanya jika ada student
        if ($student) {
            // Ambil data nilai dari general dan major
            $generalMarks = GeneralMark::where('student', $student->id)->get();
            $majorMarks = MajorMark::where('student', $student->id)->get();
    
            // Kelompokkan nilai berdasarkan semester
            $groupedGeneral = $generalMarks->groupBy('semester');
            $groupedMajor = $majorMarks->groupBy('semester');
    
            // Gabungkan semua semester yang muncul di kedua jenis nilai
            $semesters = $groupedGeneral->keys()
                ->merge($groupedMajor->keys())
                ->unique()
                ->sortDesc()
                ->take(3); // Ambil 3 semester terakhir (descending)
    
            // Loop per semester
            $semesterMarks = $semesters->map(function ($semesterId) use ($groupedGeneral, $groupedMajor) {
                $general = $groupedGeneral->get($semesterId, collect());
                $major = $groupedMajor->get($semesterId, collect());
    
                // Hitung total nilai dari daily_mark dan exam_mark
                $totalGeneral = $general->sum(fn($m) => $m->daily_mark + $m->exam_mark);
                $totalMajor = $major->sum(fn($m) => $m->daily_mark + $m->exam_mark);
    
                $total = $totalGeneral + $totalMajor;
                $count = $general->count() + $major->count();
                $average = $count > 0 ? round($total / $count, 2) : 0;
    
                return [
                    'semester' => $semesterId,
                    'total' => $total,
                    'count' => $count,
                    'average' => $average
                ];
            });
        }

        // Di dalam method index()
        $today = Carbon::today();

        // Ambil major pengguna yang login
        $userMajor = $student && $student->major ? $student->major : null;

        $today = now()->toDateString(); // atau gunakan Carbon::today()->toDateString();

        $today = Carbon::today();
        $startOfMonth = $today->copy()->startOfMonth();
        $endNextMonth = $today->copy()->addMonth()->endOfMonth();

        // Ambil 3 general trophies terdekat dan muat relasi committee
        $nearestGeneral = GeneralTrophy::with('committeeRelation')
        ->whereNotNull('date')
        ->whereBetween('date', [$startOfMonth, $endNextMonth])
        ->where('type', 2)
        ->orderBy('date', 'asc')
        ->get();

        // Ambil 3 major trophies terdekat dan muat relasi committee
        $nearestMajor = MajorTrophy::with('committeeRelation2')
        ->whereNotNull('date')
        ->whereBetween('date', [$startOfMonth, $endNextMonth])
        ->where('type', 2)
        ->orderBy('date', 'asc')
        ->when($userMajor, function ($query, $userMajor) {
            return $query->where('major', $userMajor);
        })
        ->get();

        // Tambahkan nama committee dan type ke masing-masing trophy
        $nearestGeneral->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
            $trophy->type = 'general'; // Tambahkan type
        });

        $nearestMajor->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
            $trophy->type = 'major'; // Tambahkan type
        });

        // Gabungkan dan urutkan berdasarkan selisih hari dari hari ini
        $nearest_trophies = $nearestGeneral
        ->concat($nearestMajor)
        ->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        });


        $pinnedGeneralTrophies = PinnedGeneralTrophy::where('user', $userId)
            ->with('generalTrophy')
            ->get()
            ->pluck('generalTrophy')
            ->filter(function ($trophy) {
                return $trophy && $trophy->type == 2;
            });

        $pinnedMajorTrophies = PinnedMajorTrophy::where('user', $userId)
            ->with('majorTrophy')
            ->get()
            ->pluck('majorTrophy')
            ->filter(function ($trophy) {
                return $trophy && $trophy->type == 2;
            });

        $pinnedGeneralTrophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
            $trophy->type = 'general';
        });
            
        $pinnedMajorTrophies->each(function ($trophy) {
        $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
            $trophy->type = 'major';
        });
            
        $pinned_trophies = $pinnedGeneralTrophies->concat($pinnedMajorTrophies)->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        })->take(3);
            

        $allGeneralTrophies = GeneralTrophy::with('committeeRelation')
        ->where('type', 2)
        ->get()
        ->map(function ($item) {
            $item->committee = $item->committeeRelation?->name ?? '-';
            $item->type = 'general'; // Pastikan type di-set
            return $item;
        });
        
        $studentMajor = auth()->user()?->student?->major;
        
        $allMajorTrophies = MajorTrophy::with('committeeRelation2')
        ->where('type', 2)
        ->when($studentMajor, function ($query, $studentMajor) {
            return $query->where('major', $studentMajor);
        })
        ->get()
        ->map(function ($item) {
            $item->committee = $item->committeeRelation2?->name ?? '-';
            $item->type = 'major'; // Pastikan type di-set
            return $item;
        });
        
        $all_competitions = $allGeneralTrophies
        ->concat($allMajorTrophies)
        ->sortBy('date')
        ->values(); // Optional: reset index
        
        $user = Auth::user();
        
        // Ambil trophy ID dari dua tabel pendaftaran
        $registeredMajorTrophies = FinishedMajorTrophy::where('user', $user->id)->pluck('trophy')->toArray();
        $registeredGeneralTrophies = FinishedGeneralTrophy::where('user', $user->id)->pluck('trophy')->toArray();
        
        // Gabungkan keduanya
        $registeredTrophies = array_merge($registeredMajorTrophies, $registeredGeneralTrophies);
        // Kirim data ke dashboard
        return view('trophy.competition', compact(
            'pinned_trophies',
            'advices',
            'registeredTrophies',
            'general_trophies',
            'popular_trophies',
            'major',
            'all_competitions',
            'nearest_trophies',
            'semesterMarks'
        ));
    }

    public function forum()
    {
        $userId = Auth::id(); // Ambil ID user yang sedang login
        $student = Auth::user()?->student;
    
        // Ambil data advices yang status = 2, milik user login
        $advices = Advice::where('user', $userId)
            ->where('status', 2)
            ->take(3)
            ->get();
    
        // Ambil data trophy umum dan relasi committee-nya
        $general_trophies = GeneralTrophy::with('committeeRelation')
        ->where('status', 2)
        ->where('type', 1)
        ->take(3)
        ->get();

        // Tambahkan nama committee dan set properti type = 'general'
        $general_trophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
            $trophy->type = 'general'; // Tambah properti 'type'
        });

        $major_trophies = collect(); // Default kosong

        if ($student && $student->majorRelation) {
            $majorId = $student->majorRelation->id;
            $major_trophies = MajorTrophy::with('committeeRelation2')
            ->where('status', 2)
            ->where('type', 1)
            ->where('major', $majorId)
            ->take(3)
            ->get();

            // Tambahkan nama committee dan set properti type = 'major'
            $major_trophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
            $trophy->type = 'major'; // Tambah properti 'type'
            });
        }

        // Gabungkan dan urutkan berdasarkan selisih hari
        $popular_trophies = $general_trophies
        ->concat($major_trophies)
        ->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        })
        ->take(3);
    
        // Cek apakah user memiliki relasi ke student
        $student = Auth::user()?->student;
    
        // Default major: Unknown
        $major = $student && $student->majorRelation ? $student->majorRelation->major : 'Unknown';
    
        // Inisialisasi default nilai semester
        $semesterMarks = collect();
    
        // Jalankan proses penghitungan nilai hanya jika ada student
        if ($student) {
            // Ambil data nilai dari general dan major
            $generalMarks = GeneralMark::where('student', $student->id)->get();
            $majorMarks = MajorMark::where('student', $student->id)->get();
    
            // Kelompokkan nilai berdasarkan semester
            $groupedGeneral = $generalMarks->groupBy('semester');
            $groupedMajor = $majorMarks->groupBy('semester');
    
            // Gabungkan semua semester yang muncul di kedua jenis nilai
            $semesters = $groupedGeneral->keys()
                ->merge($groupedMajor->keys())
                ->unique()
                ->sortDesc()
                ->take(3); // Ambil 3 semester terakhir (descending)
    
            // Loop per semester
            $semesterMarks = $semesters->map(function ($semesterId) use ($groupedGeneral, $groupedMajor) {
                $general = $groupedGeneral->get($semesterId, collect());
                $major = $groupedMajor->get($semesterId, collect());
    
                // Hitung total nilai dari daily_mark dan exam_mark
                $totalGeneral = $general->sum(fn($m) => $m->daily_mark + $m->exam_mark);
                $totalMajor = $major->sum(fn($m) => $m->daily_mark + $m->exam_mark);
    
                $total = $totalGeneral + $totalMajor;
                $count = $general->count() + $major->count();
                $average = $count > 0 ? round($total / $count, 2) : 0;
    
                return [
                    'semester' => $semesterId,
                    'total' => $total,
                    'count' => $count,
                    'average' => $average
                ];
            });
        }

        // Di dalam method index()
        $today = Carbon::today();

        // Ambil major pengguna yang login
        $userMajor = $student && $student->major ? $student->major : null;

        $today = now()->toDateString(); // atau gunakan Carbon::today()->toDateString();

        $today = Carbon::today();
        $startOfMonth = $today->copy()->startOfMonth();
        $endNextMonth = $today->copy()->addMonth()->endOfMonth();

        // Ambil 3 general trophies terdekat dan muat relasi committee
        $nearestGeneral = GeneralTrophy::with('committeeRelation')
        ->whereNotNull('date')
        ->whereBetween('date', [$startOfMonth, $endNextMonth])
        ->where('type', 1)
        ->orderBy('date', 'asc')
        ->get();

        // Ambil 3 major trophies terdekat dan muat relasi committee
        $nearestMajor = MajorTrophy::with('committeeRelation2')
        ->whereNotNull('date')
        ->whereBetween('date', [$startOfMonth, $endNextMonth])
        ->where('type', 1)
        ->orderBy('date', 'asc')
        ->when($userMajor, function ($query, $userMajor) {
            return $query->where('major', $userMajor);
        })
        ->get();

        // Tambahkan nama committee dan type ke masing-masing trophy
        $nearestGeneral->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
            $trophy->type = 'general'; // Tambahkan type
        });

        $nearestMajor->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
            $trophy->type = 'major'; // Tambahkan type
        });

        // Gabungkan dan urutkan berdasarkan selisih hari dari hari ini
        $nearest_trophies = $nearestGeneral
        ->concat($nearestMajor)
        ->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        });


        $pinnedGeneralTrophies = PinnedGeneralTrophy::where('user', $userId)
            ->with('generalTrophy')
            ->get()
            ->pluck('generalTrophy')
            ->filter(function ($trophy) {
                return $trophy && $trophy->type == 1;
            });

        $pinnedMajorTrophies = PinnedMajorTrophy::where('user', $userId)
            ->with('majorTrophy')
            ->get()
            ->pluck('majorTrophy')
            ->filter(function ($trophy) {
                return $trophy && $trophy->type == 1;
            });

        $pinnedGeneralTrophies->each(function ($trophy) {
            $trophy->committee = $trophy->committeeRelation?->name ?? '-';
            $trophy->type = 'general';
        });
            
        $pinnedMajorTrophies->each(function ($trophy) {
        $trophy->committee = $trophy->committeeRelation2?->name ?? '-';
            $trophy->type = 'major';
        });
            
        $pinned_trophies = $pinnedGeneralTrophies->concat($pinnedMajorTrophies)->sortBy(function ($trophy) {
            return abs(now()->diffInDays($trophy->date));
        })->take(3);
            

        $allGeneralTrophies = GeneralTrophy::with('committeeRelation')
        ->where('type', 1)
        ->get()
        ->map(function ($item) {
            $item->committee = $item->committeeRelation?->name ?? '-';
            $item->type = 'general'; // Pastikan type di-set
            return $item;
        });
        
        $studentMajor = auth()->user()?->student?->major;
        
        $allMajorTrophies = MajorTrophy::with('committeeRelation2')
        ->where('type', 1)
        ->when($studentMajor, function ($query, $studentMajor) {
            return $query->where('major', $studentMajor);
        })
        ->get()
        ->map(function ($item) {
            $item->committee = $item->committeeRelation2?->name ?? '-';
            $item->type = 'major'; // Pastikan type di-set
            return $item;
        });
        
        $all_competitions = $allGeneralTrophies
        ->concat($allMajorTrophies)
        ->sortBy('date')
        ->values(); // Optional: reset index
        
        $user = Auth::user();
        
        // Ambil trophy ID dari dua tabel pendaftaran
        $registeredMajorTrophies = FinishedMajorTrophy::where('user', $user->id)->pluck('trophy')->toArray();
        $registeredGeneralTrophies = FinishedGeneralTrophy::where('user', $user->id)->pluck('trophy')->toArray();
        
        // Gabungkan keduanya
        $registeredTrophies = array_merge($registeredMajorTrophies, $registeredGeneralTrophies);
        // Kirim data ke dashboard
        return view('trophy.forum', compact(
            'pinned_trophies',
            'advices',
            'registeredTrophies',
            'general_trophies',
            'popular_trophies',
            'major',
            'all_competitions',
            'nearest_trophies',
            'semesterMarks'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // TrophyController.php
    public function search(Request $request)
    {
        $query = $request->get('q');
        $userId = auth()->id();
    
        // Ambil major student yang login
        $studentMajor = auth()->user()?->student?->major;
    
        // Ambil major trophies sesuai major student
        $major = MajorTrophy::where('type', 2)
            ->where('name', 'LIKE', "%{$query}%")
            ->when($studentMajor, function ($q) use ($studentMajor) {
                return $q->where('major', $studentMajor);
            })
            ->get();
    
        // Ambil general trophies seperti biasa
        $general = GeneralTrophy::where('type', 2)
            ->where('name', 'LIKE', "%{$query}%")
            ->get();
    
        // Format hasil major trophies
        $results = $major->map(function ($item) use ($userId) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'reward' => $item->reward,
                'date' => $item->date,
                'fee' => $item->fee,
                'committee' => $item->committeeRelation2?->name ?? '-',
                'score' => $item->score,
                'link' => $item->link ?? '#',
                'logo' => asset($item->logo ?? 'images/default.png'),
                'type' => 'major',
                'isPinned' => \App\Models\PinnedMajorTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
                'isRegistered' => \App\Models\FinishedMajorTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
            ];
        });
    
        // Tambahkan hasil general trophies
        $results = $results->concat($general->map(function ($item) use ($userId) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'reward' => $item->reward,
                'date' => $item->date,
                'fee' => $item->fee,
                'committee' => $item->committeeRelation?->name ?? '-',
                'score' => $item->score,
                'link' => $item->link ?? '#',
                'logo' => asset($item->logo ?? 'images/default.png'),
                'type' => 'general',
                'isPinned' => \App\Models\PinnedGeneralTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
                'isRegistered' => \App\Models\FinishedGeneralTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
            ];
        }));
    
        return response()->json($results);
    }
    
    public function search2(Request $request)
    {
        $query = $request->get('q');
        $userId = auth()->id();
    
        // Ambil major student yang login
        $studentMajor = auth()->user()?->student?->major;
    
        // Ambil major trophies sesuai major student
        $major = MajorTrophy::where('type', 1)
            ->where('name', 'LIKE', "%{$query}%")
            ->when($studentMajor, function ($q) use ($studentMajor) {
                return $q->where('major', $studentMajor);
            })
            ->get();
    
        // Ambil general trophies seperti biasa
        $general = GeneralTrophy::where('type', 1)
            ->where('name', 'LIKE', "%{$query}%")
            ->get();
    
        // Format hasil major trophies
        $results = $major->map(function ($item) use ($userId) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'reward' => $item->reward,
                'date' => $item->date,
                'fee' => $item->fee,
                'committee' => $item->committeeRelation2?->name ?? '-',
                'score' => $item->score,
                'link' => $item->link ?? '#',
                'logo' => asset($item->logo ?? 'images/default.png'),
                'type' => 'major',
                'isPinned' => \App\Models\PinnedMajorTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
                'isRegistered' => \App\Models\FinishedMajorTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
            ];
        });
    
        // Tambahkan hasil general trophies
        $results = $results->concat($general->map(function ($item) use ($userId) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'reward' => $item->reward,
                'date' => $item->date,
                'fee' => $item->fee,
                'committee' => $item->committeeRelation?->name ?? '-',
                'score' => $item->score,
                'link' => $item->link ?? '#',
                'logo' => asset($item->logo ?? 'images/default.png'),
                'type' => 'general',
                'isPinned' => \App\Models\PinnedGeneralTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
                'isRegistered' => \App\Models\FinishedGeneralTrophy::where('user', $userId)
                    ->where('trophy', $item->id)
                    ->exists(),
            ];
        }));
    
        return response()->json($results);
    }

    public function register($type, $id)
    {
        $user = Auth::user();
    
        if ($type === 'major') {
            FinishedMajorTrophy::create([
                'user' => $user->id,
                'trophy' => $id,
                'pict' => null,
                'status' => 1,
            ]);
        } elseif ($type === 'general') {
            FinishedGeneralTrophy::create([
                'user' => $user->id,
                'trophy' => $id,
                'pict' => null,
                'status' => 1,
            ]);
        } else {
            return redirect()->back()->with('error', 'Tipe trofi tidak valid!');
        }
    
        return redirect()->back()->with('success', 'Berhasil register ke kompetisi!');
    }
    

    public function pin($type, $id)
    {
        $userId = Auth::id();
    
        if ($type === 'major') {
            $trophy = MajorTrophy::find($id);
            if (!$trophy) return back()->with('error', 'Trophy major tidak ditemukan.');
    
            $pinnedCount = PinnedMajorTrophy::where('user', $userId)->count();
            if ($pinnedCount >= 3) return back()->with('error', 'Hanya bisa pin 3');
    
            $alreadyPinned = PinnedMajorTrophy::where('user', $userId)->where('trophy', $id)->exists();
            if (!$alreadyPinned) {
                PinnedMajorTrophy::create(['user' => $userId, 'trophy' => $id]);
            }
    
            return back()->with('success', 'Trophy major berhasil dipin!');
        }
    
        if ($type === 'general') {
            $trophy = GeneralTrophy::find($id);
            if (!$trophy) return back()->with('error', 'Trophy umum tidak ditemukan.');
    
            $pinnedCount = PinnedGeneralTrophy::where('user', $userId)->count();
            if ($pinnedCount >= 3) return back()->with('error', 'Hanya bisa pin 3');
    
            $alreadyPinned = PinnedGeneralTrophy::where('user', $userId)->where('trophy', $id)->exists();
            if (!$alreadyPinned) {
                PinnedGeneralTrophy::create(['user' => $userId, 'trophy' => $id]);
            }
    
            return back()->with('success', 'Trophy umum berhasil dipin!');
        }
    
        return back()->with('error', 'Tipe trophy tidak valid.');
    }
    
    public function unpin($type, $id)
    {
        $userId = Auth::id();
    
        if ($type === 'major') {
            PinnedMajorTrophy::where('user', $userId)->where('trophy', $id)->delete();
            return back()->with('success', 'Trophy major berhasil di-unpin!');
        }
    
        if ($type === 'general') {
            PinnedGeneralTrophy::where('user', $userId)->where('trophy', $id)->delete();
            return back()->with('success', 'Trophy umum berhasil di-unpin!');
        }
    
        return back()->with('error', 'Tipe trophy tidak valid.');
    }
    

}