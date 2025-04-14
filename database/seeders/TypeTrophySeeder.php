<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $type_trophies = [
        [1, "Forum"],
        [2, "Competition"]
    ];

    public function run(): void
    {
        foreach ($this->type_trophies as $type_trophy) {
            \App\Models\TypeTrophy::create([
                "id" => $type_trophy[0],
                "type" => $type_trophy[1],
            ]);
        }
    }
}
