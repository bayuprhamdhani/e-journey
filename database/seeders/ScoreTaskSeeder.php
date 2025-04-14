<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $score_tasks = [
        [1, 2, 900],
        [2, 73, 900],
        [3, 75, 900],
    ];
    

    public function run(): void
    {
        foreach ($this->score_tasks as $score_task) {
            \App\Models\ScoreTask::create([
                "id" => $score_task[0],
                "user" => $score_task[1],
                "score_task" => $score_task[2],
            ]);
        }
    }
}
