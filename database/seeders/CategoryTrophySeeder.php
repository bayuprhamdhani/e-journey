<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $category_trophies = [
        [1, "registered"],
        [2, "unregistered"]
    ];

    public function run(): void
    {
        foreach ($this->category_trophies as $category_trophy) {
            \App\Models\CategoryTrophy::create([
                "id" => $category_trophy[0],
                "category" => $category_trophy[1],
            ]);
        }
    }
}
