<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusAdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $status_advices = [
        [1, "ordinary"],
        [2, "priority"]
    ];

    public function run(): void
    {
        foreach ($this->status_advices as $status_advice) {
            \App\Models\StatusAdvice::create([
                "id" => $status_advice[0],
                "status_advice" => $status_advice[1],
            ]);
        }
    }
}
