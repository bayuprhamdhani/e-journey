<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class MajorTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $major_trophies = [
        //mipa
        [1, "Lomba Robot", 1, 2, 1, 1, "2025/01/01", "Siswa membuat robot dari bahan bahan sederhana", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 0, 1],
        [2, "Lomba Roket", 1, 2, 1, 1, "2025/05/01", "Siswa membuat roket air dari bahan bahan sederhana", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 0, 1],
        [3, "Lomba Cerdas Cermat Biologi", 1, 2, 1, 2, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 0, 1],
        [4, "Lomba Karya Tulis Biologi", 1, 2, 1, 1, "2025/01/01", "Siswa membuat Karya tulis ilmiah", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 0, 1],
        [5, "Lomba Teknologi Tepat Guna", 1, 2, 2, 1, "2025/01/01", "Siswa membuat inovasi teknologi dari bahan bahan sederhana", "edugame.online", 600000, "pictMajorTrophy/1.jpg", 50000, 50, 60, 0, 1],
        [6, "Seminar Ilmu Biologi", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 60, 0, 1],
        [7, "Seminar Ilmu Fisika", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 0, 1],
        [8, "Seminar Ilmu Kimia", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 0, 2],
        [9, "Seminar dunia profesi medis", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 0, 2],
        [10, "Seminar Tips masuk jurusan kedokteran", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 0, 2],
    
        //ips
        [11, "Lomba Debat Sosiologi", 2, 2, 1, 1, "2025/01/01", "Siswa membuat robot dari bahan bahan sederhana", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 0, 1],
        [12, "Lomba Debat Ekonomi", 2, 2, 1, 1, "2025/05/01", "Siswa membuat roket air dari bahan bahan sederhana", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 0, 1],
        [13, "Lomba Cerdas Cermat Sosial", 2, 2, 1, 2, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 0, 1],
        [14, "Lomba Karya Tulis Ekonomi", 2, 2, 1, 1, "2025/01/01", "Siswa membuat Karya tulis ilmiah", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 0, 1],
        [15, "Lomba Proposal Bisnis", 2, 2, 2, 1, "2025/01/01", "Siswa membuat inovasi teknologi dari bahan bahan sederhana", "edugame.online", 600000, "pictMajorTrophy/1.jpg", 50000, 50, 60, 0, 1],
        [16, "Seminar Ilmu Sosiologi", 2, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 60, 0, 1],
        [17, "Seminar Ilmu Ekonomi", 2, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 0, 1],
        [18, "Seminar Ilmu Sejarah", 2, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 0, 2],
        [19, "Seminar dunia bisnis", 2, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 0, 2],
        [20, "Seminar Tips masuk jurusan hukum", 2, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 0, 2],
    
        //bahasa
        [21, "Lomba Debat Antropologi", 3, 2, 1, 1, "2025/01/01", "Siswa membuat robot dari bahan bahan sederhana", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 0, 1],
        [22, "Lomba Debat Kebudayaan", 3, 2, 1, 1, "2025/05/01", "Siswa membuat roket air dari bahan bahan sederhana", "edugame.online", 1000000, "pictMajorTrophy/1.jpg", 50000, 50, 100, 0, 1],
        [23, "Lomba Cerdas Cermat Budaya", 3, 2, 1, 2, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 0, 1],
        [24, "Lomba Karya Tulis Budaya", 3, 2, 1, 1, "2025/01/01", "Siswa membuat Karya tulis ilmiah", "edugame.online", 800000, "pictMajorTrophy/1.jpg", 50000, 50, 80, 0, 1],
        [25, "Lomba Cipta puisi berbahasa daerah", 3, 2, 2, 1, "2025/01/01", "Siswa membuat inovasi teknologi dari bahan bahan sederhana", "edugame.online", 600000, "pictMajorTrophy/1.jpg", 50000, 50, 60, 0, 1],
        [26, "Seminar Ilmu Antropologi", 3, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 60, 0, 1],
        [27, "Seminar Ilmu Sejarah", 3, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 0, 1],
        [28, "Seminar Ilmu Sastra Bahasa", 3, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 40, 0, 2],
        [29, "Seminar kebudayaan", 3, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 0, 2],
        [30, "Seminar Tips masuk jurusan sastra budaya", 3, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", 0, "pictMajorTrophy/1.jpg", 50000, 50, 20, 0, 2],
    ];

    public function run(): void
    {
        foreach ($this->major_trophies as $major_trophy) {
            \App\Models\MajorTrophy::create([
                "id" => $major_trophy[0],
                "name" => $major_trophy[1],
                "major" => $major_trophy[2],
                "type" => $major_trophy[3],
                "committee" => $major_trophy[4],
                "status" => $major_trophy[5],
                "date" => $major_trophy[6],
                "description" => $major_trophy[7],
                "link" => $major_trophy[8],
                "reward" => $major_trophy[9],
                "logo" => $major_trophy[10],
                "fee" => $major_trophy[11],
                "participant" => $major_trophy[12],
                "score" => $major_trophy[13],
                "repeat" => $major_trophy[14],
                "category" => $major_trophy[15],
            ]);
        }
    }
}
