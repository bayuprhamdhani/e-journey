<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusFinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $status_finishes = [
        [1, "registered"],
        [2, "accepted"],
        [3, "finished"]
    ];

    public function run(): void
    {
        foreach ($this->status_finishes as $status_finish) {
            \App\Models\StatusFinish::create([
                "id" => $status_finish[0],
                "status" => $status_finish[1],
            ]);
        }
    }
}
