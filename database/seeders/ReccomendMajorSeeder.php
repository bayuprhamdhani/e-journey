<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ReccomendMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $reccomend_majors = [
        // K001 - Kecerdasan Linguistic-Verbal
        [1, 1, "Ilmu Perpustakaan"],
        [2, 1, "Ilmu Komunikasi"],
        [3, 1, "Bahasa dan Sastra"],
        [4, 1, "Ilmu Hubungan Internasional"],
        [5, 1, "Ilmu Hukum"],
        [6, 1, "Ilmu Politik"],
        
        // K002 - Kecerdasan Logika–Matematik
        [7, 2, "Statistika"],
        [8, 2, "Administrasi Negara"],
        [9, 2, "Akuntansi"],
        [10, 2, "Ilmu Ekonomi"],
        [11, 2, "Pendidikan Matematika"],
        [12, 2, "Ilmu Fisika"],
        [13, 2, "Ilmu Kimia"],
        [14, 2, "Teknik Informatika"],
        [15, 2, "Sistem Informasi"],
        
        // K003 - Kecerdasan Spasial-Visual
        [16, 3, "Seni Rupa"],
        [17, 3, "Teknik Arsitektur"],
        [18, 3, "Planologi"],
        [19, 3, "Teknik Sipil"],
        
        // K004 - Kecerdasan Ritmik-Musik
        [20, 4, "Seni Musik"],
        
        // K005 - Kecerdasan Kinestetik
        [21, 5, "Kedokteran Gigi"],
        [22, 5, "Kebidanan"],
        [23, 5, "Seni tari"],
        [24, 5, "PJKR"],
        [25, 5, "Teknik Mesin"],
        
        // K006 - Kecerdasan Interpersonal
        [26, 6, "Ilmu sosiologi"],
        [27, 6, "PGPAUD"],
        [28, 6, "PGSD"],
        [29, 6, "Psikologi"],
        [30, 6, "Kedokteran"],
        [31, 6, "Ilmu Keperawatan"],
        [32, 6, "Fakultas Kesehatan Masyarakat"],
        [33, 6, "Antropologi"],
        
        // K007 - Kecerdasan Intrapersonal
        [34, 7, "Ilmu Agama"],
        [35, 7, "Administrasi Niaga"],
        
        // K008 - Kecerdasan Naturalis
        [36, 8, "Kedokteran Hewan"],
        [37, 8, "Fakultas Perikanan"],
        [38, 8, "Fakultas Peternakan"],
        [39, 8, "Ilmu Biologi"],
        [40, 8, "Fakultas Pertanian"],
        
        // K009 - Kecerdasan Eksistensial
        [41, 9, "Ilmu Filsafat"],
        [42, 9, "Ilmu Sejarah"]
    ];

    public function run(): void
    {
        foreach ($this->reccomend_majors as $reccomend_major) {
            \App\Models\ReccomendMajor::create([
                "id" => $reccomend_major[0],
                "intelligence_type" => $reccomend_major[1],
                "reccomend_major" => $reccomend_major[2],
            ]);
        }
    }
}