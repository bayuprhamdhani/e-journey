<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class QuestionDreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $question_dreams = [
        // K001 - Kecerdasan Linguistic-Verbal
        [1, "Apakah Anda lebih menyukai pelajaran bahasa daripada matematika?", 1],
        
        // K002 - Kecerdasan Logika–Matematik
        [2, "Apakah matematika adalah pelajaran favorit Anda?", 2],
        
        // K003 - Kecerdasan Spasial-Visual
        [3, "Apakah Anda lebih mudah memahami sesuatu melalui gambar?", 3],
        
        // K004 - Kecerdasan Ritmik-Musik
        [4, "Apakah mendengarkan musik adalah rutinitas harian Anda?", 4],
        
        // K005 - Kecerdasan Kinestetik
        [5, "Apakah olahraga membuat Anda bahagia?", 5],
        
        // K006 - Kecerdasan Interpersonal
        [6, "Apakah Anda mudah berteman dengan orang baru?", 6],
        
        // K007 - Kecerdasan Intrapersonal
        [7, "Apakah Anda lebih suka melakukan sesuatu sendiri?", 7],
        
        // K008 - Kecerdasan Naturalis
        [8, "Apakah Anda tertarik dengan alam dan lingkungan?", 8],
        
        // K009 - Kecerdasan Eksistensial
        [9, "Apakah Anda merenungkan makna kehidupan?", 9],
    ];


    public function run(): void
    {
        foreach ($this->question_dreams as $question_dream) {
            \App\Models\QuestionDream::create([
                "id" => $question_dream[0],
                "question_dream" => $question_dream[1],
                "intelligence_type" => $question_dream[2],
            ]);
        }
    }
}