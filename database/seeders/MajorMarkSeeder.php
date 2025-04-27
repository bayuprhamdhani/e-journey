<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MajorMark;

class MajorMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $major_marks = [];

        // Data eksplisit untuk siswa pertama (Zalsa) - 6 semester
        $id = 1;
        for ($semester = 1; $semester <= 6; $semester++) {
            for ($lesson = 1; $lesson <= 4; $lesson++) {
                $major_marks[] = [
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

            // Tentukan kelompok mata pelajaran berdasarkan student
            $lesson_group = 1; // default 1-4
            if ($student % 30 >= 11 && $student % 30 <= 20) {
                $lesson_group = 5; // 5-8
            } elseif ($student % 30 >= 21) {
                $lesson_group = 9; // 9-12
            }

            for ($semester = 1; $semester <= $max_semester; $semester++) {
                for ($lesson_offset = 0; $lesson_offset < 4; $lesson_offset++) {
                    $major_marks[] = [
                        $id++,
                        $student_id,
                        $lesson_group + $lesson_offset,
                        $semester,
                        $nilai,
                        $nilai
                    ];
                }
            }
        }

        // Simpan ke database
        foreach ($major_marks as $major_mark) {
            MajorMark::create([
                "id" => $major_mark[0],
                "student" => $major_mark[1],
                "major_lesson" => $major_mark[2],
                "semester" => $major_mark[3],
                "daily_mark" => $major_mark[4],
                "exam_mark" => $major_mark[5],
            ]);
        }
    }
}