<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorLessonIntelligenceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Format: [major_lesson_id, intelligence_type_id]

            // Linguistik-Verbal
            [10, 1], // Bahasa Daerah
            [11, 1], // Bahasa dan Sastra Indonesia
            [12, 1], // Bahasa dan Sastra Inggris

            // Logika-Matematik
            [1, 2], // Matematika Peminatan
            [2, 2], // Fisika
            [3, 2], // Kimia
            [4, 2], // Biologi
            [6, 2], // Ekonomi
            [34, 2], // Akuntansi Dasar
            [35, 2], // Perpajakan
            [36, 2], // Aplikasi Akuntansi (MYOB/Zahir)

            // Spasial-Visual
            [25, 3], // Gambar Teknik
            [26, 3], // Computer Numerical Control (CNC)
            [46, 3], // Desain Grafis
            [47, 3], // Fotografi
            [48, 3], // Animasi 2D/3D

            // Ritmik-Musik
            [49, 4], // Aransemen Musik
            [50, 4], // Teknik Bermain Alat Musik
            [51, 4], // Produksi Musik Digital

            // Kinestetik
            [41, 5], // Housekeeping
            [23, 5], // Kelistrikan Kendaraan
            [24, 5], // Pemeliharaan Mesin
            [43, 5], // Patisserie
            [44, 5], // Indonesian Cuisine

            // Interpersonal
            [39, 6], // Kewirausahaan
            [38, 6], // Manajemen Pemasaran
            [40, 6], // Front Office

            // Intrapersonal
            [9, 7],  // Antropologi
            [37, 7], // Bisnis Online

            // Naturalis
            [4, 8],  // Biologi
            [28, 8], // Anatomi Fisiologi
            [29, 8], // Asuhan Keperawatan
            [30, 8], // Farmakologi
            [31, 8], // Ilmu Resep
            [32, 8], // Teknologi Sediaan Obat
            [33, 8], // Kimia Farmasi

            // Eksistensial
            [9, 9], // Antropologi
        ];

        foreach ($data as [$lesson_id, $intelligence_id]) {
            DB::table('intelligence_type_major_lesson')->insert([
                'lesson' => $lesson_id,
                'intelligence' => $intelligence_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
