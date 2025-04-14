<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class GeneralLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $general_lessons = [
        [1, 1, "Pendidikan Agama dan Budi Pekerti"],
        [2, 1, "Pendidikan Pancasila"],
        [3, 1, "Bahasa Indonesia"],
        [4, 1, "Matematika"],
        [5, 1, "Bahasa Inggris"],
        [6, 1, "Pendidikan Jasmani Olahraga dan Kesehatan"],
        [7, 1, "Ilmu Pengetahuan Alam (IPA)"],
        [8, 1, "Ilmu Pengetahuan Sosial (IPS)"],
        [9, 1, "Seni dan Budaya"],
        [10, 1, "Sejarah"]
    ];

    public function run(): void
    {
        foreach ($this->general_lessons as $general_lesson) {
            \App\Models\GeneralLesson::create([
                "id" => $general_lesson[0],
                "country" => $general_lesson[1],
                "lesson" => $general_lesson[2]
            ]);
        }
    }
}
