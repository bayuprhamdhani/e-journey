<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $semesters = [
        [1, "satu"],
        [2, "dua"],
        [3, "tiga"],
        [4, "empat"],
        [5, "lima"],
        [6, "enam"]
    ];

    public function run(): void
    {
        foreach ($this->semesters as $semester) {
            \App\Models\Semester::create([
                "id" => $semester[0],
                "semester" => $semester[1],
            ]);
        }
    }
}
