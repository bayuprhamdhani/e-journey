<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $major_lessons = [
        [1, 1, 1, "Matematika Peminatan"],
        [2, 1, 1, "Biologi"],
        [3, 1, 1, "Fisika"],
        [4, 1, 1, "Kimia"],
        [5, 1, 2, "Geografi"],
        [6, 1, 2, "Sejarah"],
        [7, 1, 2, "Sosiologi"],
        [8, 1, 2, "Ekonomi"],
        [9, 1, 3, "Bahasa dan Sastra Indonesia"],
        [10, 1, 3, "Bahasa dan Sastra Inggris"],
        [11, 1, 3, "Antropologi"],
        [12, 1, 3, "Bahasa Daerah"],
    ];

    public function run(): void
    {
        foreach ($this->major_lessons as $major_lesson) {
            \App\Models\MajorLesson::create([
                "id" => $major_lesson[0],
                "country" => $major_lesson[1],
                "major" => $major_lesson[2],
                "lesson" => $major_lesson[3],
            ]);
        }
    }
}
