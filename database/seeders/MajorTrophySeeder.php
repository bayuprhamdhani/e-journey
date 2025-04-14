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
        [1, "Lomba Robot", 1, 2, 1, 2, "2025/01/01", "Siswa membuat robot dari bahan bahan sederhana", "edugame.online", "Rp1000000", "pictMajorTrophy/1.jpg", 50000, 50, 100, 100],
        [2, "Lomba Roket", 1, 2, 1, 2, "2025/01/01", "Siswa membuat roket air dari bahan bahan sederhana", "edugame.online", "Rp1000000", "pictMajorTrophy/1.jpg", 50000, 50, 100, 100],
        [3, "Lomba Cerdas Cermat Biologi", 1, 2, 1, 2, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", "Rp800000", "pictMajorTrophy/1.jpg", 50000, 50, 80, 80],
        [4, "Lomba Karya Tulis Biologi", 1, 2, 1, 1, "2025/01/01", "Siswa membuat Karya tulis ilmiah", "edugame.online", "Rp800000", "pictMajorTrophy/1.jpg", 50000, 50, 80, 80],
        [5, "Lomba Teknologi Tepat Guna", 1, 2, 2, 1, "2025/01/01", "Siswa membuat inovasi teknologi dari bahan bahan sederhana", "edugame.online", "RP600000", "pictMajorTrophy/1.jpg", 50000, 50, 60, 60],
        [6, "Seminar Ilmu Biologi", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 60, 60],
        [7, "Seminar Ilmu Fisika", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 40, 40],
        [8, "Seminar Ilmu Kimia", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 40, 40],
        [9, "Seminar dunia profesi medis", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 20, 20],
        [10, "Seminar Tips masuk jurusan kedokteran", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 20, 20],

        //ips
        [11, "Lomba Debat Sosiologi", 1, 2, 1, 2, "2025/01/01", "Siswa membuat robot dari bahan bahan sederhana", "edugame.online", "Rp1000000", "pictMajorTrophy/1.jpg", 50000, 50, 100, 100],
        [12, "Lomba Debat Ekonomi", 1, 2, 1, 2, "2025/01/01", "Siswa membuat roket air dari bahan bahan sederhana", "edugame.online", "Rp1000000", "pictMajorTrophy/1.jpg", 50000, 50, 100, 100],
        [13, "Lomba Cerdas Cermat Sosial", 1, 2, 1, 2, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", "Rp800000", "pictMajorTrophy/1.jpg", 50000, 50, 80, 80],
        [14, "Lomba Karya Tulis Ekonomi", 1, 2, 1, 1, "2025/01/01", "Siswa membuat Karya tulis ilmiah", "edugame.online", "Rp800000", "pictMajorTrophy/1.jpg", 50000, 50, 80, 80],
        [15, "Lomba Proposal Bisnis", 1, 2, 2, 1, "2025/01/01", "Siswa membuat inovasi teknologi dari bahan bahan sederhana", "edugame.online", "RP600000", "pictMajorTrophy/1.jpg", 50000, 50, 60, 60],
        [16, "Seminar Ilmu Sosiologi", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 60, 60],
        [17, "Seminar Ilmu Ekonomi", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 40, 40],
        [18, "Seminar Ilmu Sejarah", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 40, 40],
        [19, "Seminar dunia bisnis", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 20, 20],
        [20, "Seminar Tips masuk jurusan hukum", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 20, 20],

        //bahasa
        [21, "Lomba Debat Antropologi", 1, 2, 1, 2, "2025/01/01", "Siswa membuat robot dari bahan bahan sederhana", "edugame.online", "Rp1000000", "pictMajorTrophy/1.jpg", 50000, 50, 100, 100],
        [22, "Lomba Debat Kebudayaan", 1, 2, 1, 2, "2025/01/01", "Siswa membuat roket air dari bahan bahan sederhana", "edugame.online", "Rp1000000", "pictMajorTrophy/1.jpg", 50000, 50, 100, 100],
        [23, "Lomba Cerdas Cermat Budaya", 1, 2, 1, 2, "2025/01/01", "Siswa dibagi beberapa tim yang akan saling bertanding", "edugame.online", "Rp800000", "pictMajorTrophy/1.jpg", 50000, 50, 80, 80],
        [24, "Lomba Karya Tulis Budaya", 1, 2, 1, 1, "2025/01/01", "Siswa membuat Karya tulis ilmiah", "edugame.online", "Rp800000", "pictMajorTrophy/1.jpg", 50000, 50, 80, 80],
        [25, "Lomba Cipta puisi berbahasa daerah", 1, 2, 2, 1, "2025/01/01", "Siswa membuat inovasi teknologi dari bahan bahan sederhana", "edugame.online", "RP600000", "pictMajorTrophy/1.jpg", 50000, 50, 60, 60],
        [26, "Seminar Ilmu Antropologi", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 60, 60],
        [27, "Seminar Ilmu Sejarah", 1, 1, 2, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 40, 40],
        [28, "Seminar Ilmu Sastra Bahasa", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 40, 40],
        [29, "Seminar kebudayaan", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 20, 20],
        [30, "Seminar Tips masuk jurusan sastra budaya", 1, 1, 3, 1, "2025/01/01", "Seminar di ikuti siswa-siswa dari berbagai sekolah dan daerah", "edugame.online", "", "pictMajorTrophy/1.jpg", 50000, 50, 20, 20],
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
            ]);
        }
    }
}
