<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class AnswerDreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $answer_dreams = [
        [1, 1, 1, 1],
    ];

    public function run(): void
    {
        foreach ($this->answer_dreams as $answer_dream) {
            \App\Models\AnswerDream::create([
                "id" => $answer_dream[0],
                "user" => $answer_dream[1],
                "question_dream" => $answer_dream[2],
                "option_answer" => $answer_dream[3],
            ]);
        }
    }
}
