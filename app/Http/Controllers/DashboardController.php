<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Advice;
use App\Models\GeneralTrophy;
use App\Models\GeneralMark;
use App\Models\MajorTrophy;
use App\Models\MajorMark;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class DashboardController extends Controller
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
    
        // Kirim data ke dashboard
        return view('dashboard', compact(
            'advices',
            'general_trophies',
            'major_trophies',
            'major',
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
}
