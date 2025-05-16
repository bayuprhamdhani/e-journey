<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralLessonIntelligenceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Format: [general_lesson_id, intelligence_type_id]

            // Linguistik-Verbal
            [1, 1], // Pendidikan Agama
            [2, 1], // Pendidikan Pancasila
            [3, 1], // Bahasa Indonesia
            [10, 1], // Sejarah

            // Logika-Matematik
            [4, 2], // Matematika
            [7, 2], // IPA

            // Spasial-Visual
            [9, 3], // Seni dan Budaya

            // Ritmik-Musik
            // (belum ada dalam general_lessons)

            // Kinestetik
            [6, 5], // PJOK

            // Interpersonal
            [2, 6], // Pendidikan Pancasila (interaksi sosial)

            // Intrapersonal
            [1, 7], // Pendidikan Agama
            [10, 7], // Sejarah

            // Naturalis
            [7, 8], // IPA

            // Eksistensial
            [1, 9], // Pendidikan Agama
            [10, 9], // Sejarah
        ];

        foreach ($data as [$lesson_id, $intelligence_id]) {
            DB::table('general_lesson_intelligence_type')->insert([
                'lesson' => $lesson_id,
                'intelligence' => $intelligence_id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
