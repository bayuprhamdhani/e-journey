<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class MajorLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $major_lessons = [
        [1, 1, "Matematika Peminatan"],
        [2, 1, "Fisika"],
        [3, 1, "Kimia"],
        [4, 1, "Biologi"],
        [5, 2, "Geografi"],
        [6, 2, "Ekonomi"],
        [7, 2, "Sejarah"],
        [8, 2, "Sosiologi"],
        [9, 3, "Antropologi"],
        [10, 3, "Bahasa Daerah"],
        [11, 3, "Bahasa dan Sastra Indonesia"],
        [12, 3, "Bahasa dan Sastra Inggris"],
        [13, 4, "Pemrograman Dasar"],
        [14, 4, "Pemrograman Web"],
        [15, 4, "Pemrograman Berorientasi Objek"],
        [16, 4, "Basis Data"],
        [17, 4, "Jaringan Komputer"],
        [18, 5, "Sistem Komputer"],
        [19, 5, "Administrasi Infrastruktur Jaringan"],
        [20, 5, "Cybersecurity"],
        [21, 5, "Cloud Computing"],
        [22, 6, "Engine Management System"],
        [23, 6, "Kelistrikan Kendaraan"],
        [24, 6, "Pemeliharaan Mesin"],
        [25, 7, "Gambar Teknik"],
        [26, 7, "Computer Numerical Control (CNC)"],
        [27, 7, "Fabrikasi Logam"],
        [28, 8, "Anatomi Fisiologi"],
        [29, 8, "Asuhan Keperawatan"],
        [30, 8, "Farmakologi"],
        [31, 9, "Ilmu Resep"],
        [32, 9, "Teknologi Sediaan Obat"],
        [33, 9, "Kimia Farmasi"],
        [34, 10, "Akuntansi Dasar"],
        [35, 10, "Perpajakan"],
        [36, 10, "Aplikasi Akuntansi (MYOB/Zahir)"],
        [37, 11, "Bisnis Online"],
        [38, 11, "Manajemen Pemasaran"],
        [39, 11, "Kewirausahaan"],
        [40, 12, "Front Office"],
        [41, 12, "Housekeeping"],
        [42, 12, "Food & Beverage Service"],
        [43, 13, "Patisserie"],
        [44, 13, "Indonesian Cuisine"],
        [45, 13, "Hygiene Sanitasi"],
        [46, 14, "Desain Grafis"],
        [47, 14, "Fotografi"],
        [48, 14, "Animasi 2D/3D"],
        [49, 15, "Aransemen Musik"],
        [50, 15, "Teknik Bermain Alat Musik"],
        [51, 15, "Produksi Musik Digital"]
    ];

    public function run(): void
    {
        foreach ($this->major_lessons as $major_lesson) {
            \App\Models\MajorLesson::create([
                "id" => $major_lesson[0],
                "major" => $major_lesson[1],
                "lesson" => $major_lesson[2]
            ]);
        }
    }
}
