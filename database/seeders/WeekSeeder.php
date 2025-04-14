<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $weeks = [
        [1, "satu"],
        [2, "dua"],
        [3, "tiga"],
        [4, "empat"]
    ];

    public function run(): void
    {
        foreach ($this->weeks as $week) {
            \App\Models\Week::create([
                "id" => $week[0],
                "week" => $week[1],
            ]);
        }
    }
}
