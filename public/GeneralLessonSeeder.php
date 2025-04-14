<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $general_lessons = [
        [1, 1, 1, "Pendidikan Agama & Budi Pekerti"],
        [2, 1, 1, "Pendidikan Pancasila & Kewarganegaraan"],
        [3, 1, 1, "Bahasa Indonesia"],
        [4, 1, 1, "Matematika"],
        [5, 1, 1, "Sejarah Indonesia"],
        [6, 1, 1, "Bahasa Inggris"],
        [7, 1, 1, "Seni Budaya"],
        [8, 1, 1, "Pendidikan Jasmani, Olahraga & Kesehatan"],
        [9, 1, 1, "Prakarya & Kewirausahaan"],
        [10, 1, 1, "Bahasa Sunda"],
    ];

    public function run(): void
    {
        foreach ($this->general_lessons as $general_lesson) {
            \App\Models\GeneralLesson::create([
                "id" => $general_lesson[0],
                "country" => $general_lesson[1],
                "lesson" => $general_lesson[2],
            ]);
        }
    }
}
