<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class OptionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $option_answers = [
        [1, "enggak banget lah", 1],
        [2, "enggak sih", 2],
        [3, "iya lagi", 3],
        [4, "iya banget tuh", 4],
    ];

    public function run(): void
    {
        foreach ($this->option_answers as $option_answer) {
            \App\Models\OptionAnswer::create([
                "id" => $option_answer[0],
                "option_answer" => $option_answer[1],
                "score" => $option_answer[2],
            ]);
        }
    }
}
