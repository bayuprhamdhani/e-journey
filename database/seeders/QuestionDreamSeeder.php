<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuestionDream;

class QuestionDreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // K001 - Kecerdasan Linguistic-Verbal (1)
            ["saya sangat suka bercerita kepada orang lain", 1],

        ];

        $id = 1;
        foreach ($questions as $question) {
            QuestionDream::create([
                "id" => $id++,
                "question_dream" => $question[0],
                "intelligence_type" => $question[1],
            ]);
        }
    }
}