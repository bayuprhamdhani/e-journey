<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $status_trophies = [
        [1, "ordinary"],
        [2, "special"]
    ];

    public function run(): void
    {
        foreach ($this->status_trophies as $status_trophy) {
            \App\Models\StatusTrophy::create([
                "id" => $status_trophy[0],
                "status" => $status_trophy[1],
            ]);
        }
    }
}
