<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class GeneralTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $general_trophies = [
        //competition
        [1, "Lomba Debat Bahasa Inggris", 2, 1, 1, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 100, 0],
        [2, "Lomba Pramuka", 2, 1, 1, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 100, 0],
        [3, "Lomba Debat Bahasa Indonesia", 2, 1, 1, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 80, 0],
        [4, "Lomba Pidato", 2, 1, 1, "2025/01/01", "Setiap siswa akan saling bertanding", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 80, 0],
        [5, "Lomba Gagasan Kreatif", 2, 2, 1, "2025/01/01", "Siswa membuat gagasan kreatif", "edugame.online", 600000, "pictMajorTrophy/1.jpg", 50000, 50, 60, 60, 0],

        //forum
        [6, "Seminar UTBK", 1, 2, 1, "2025/05/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 60, 60, 0],
        [7, "Campus EXPO", 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 40, 0],
        [8, "Seminar Pemuda Berdampak", 1, 3, 2, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 40, 0],
        [9, "Seminar Motivasi Siswa", 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 20, 0],
        [10, "Kajian Keagamaan", 1, 3, 1, "2025/01/01", "Kajian di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 20, 0],

    ];

    public function run(): void
    {
        foreach ($this->general_trophies as $general_trophy) {
            \App\Models\GeneralTrophy::create([
                "id" => $general_trophy[0],
                "name" => $general_trophy[1],
                "type" => $general_trophy[2],
                "committee" => $general_trophy[3],
                "status" => $general_trophy[4],
                "date" => $general_trophy[5],
                "description" => $general_trophy[6],
                "link" => $general_trophy[7],
                "reward" => $general_trophy[8],
                "logo" => $general_trophy[9],
                "fee" => $general_trophy[10],
                "participant" => $general_trophy[11],
                "score" => $general_trophy[12],
                "repeat" => $general_trophy[13],
            ]);
        }
    }
}
