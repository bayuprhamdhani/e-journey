<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralMark;

class GeneralMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general_marks = [];

        // Data eksplisit untuk siswa pertama (Zalsa)
        $id = 1;
        for ($semester = 1; $semester <= 6; $semester++) {
            for ($lesson = 1; $lesson <= 10; $lesson++) {
                $general_marks[] = [
                    $id++,
                    1, // student_id Zalsa
                    $lesson,
                    $semester,
                    90,
                    90
                ];
            }
        }

        // Data dinamis untuk siswa 2 sampai 71
        for ($student = 1; $student <= 70; $student++) {
            $student_id = $student + 1;

            // Tentukan jumlah semester berdasarkan range student
            if (
                ($student >= 1 && $student <= 10) || 
                ($student >= 31 && $student <= 40) || 
                ($student >= 61 && $student <= 70)
            ) {
                $max_semester = 2;
            } elseif (
                ($student >= 11 && $student <= 20) || 
                ($student >= 41 && $student <= 50)
            ) {
                $max_semester = 4;
            } else {
                $max_semester = 6;
            }

            // Tentukan nilai berdasarkan student tertentu
            $nilai = 75;
            if (in_array($student, [1, 11, 21, 31, 41, 51, 61])) {
                $nilai = 85;
            } elseif (in_array($student, [32, 42, 52])) {
                $nilai = 78;
            } elseif ($student == 31) {
                $nilai = 80;
            }

            for ($semester = 1; $semester <= $max_semester; $semester++) {
                for ($lesson = 1; $lesson <= 10; $lesson++) {
                    $general_marks[] = [
                        $id++,
                        $student_id,
                        $lesson,
                        $semester,
                        $nilai,
                        $nilai
                    ];
                }
            }
        }

        // Simpan ke database
        foreach ($general_marks as $general_mark) {
            GeneralMark::create([
                "id" => $general_mark[0],
                "student" => $general_mark[1],
                "general_lesson" => $general_mark[2],
                "semester" => $general_mark[3],
                "daily_mark" => $general_mark[4],
                "exam_mark" => $general_mark[5],
            ]);
        }
    }
}
