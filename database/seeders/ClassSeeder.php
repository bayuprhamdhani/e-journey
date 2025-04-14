<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $classes = [
        [1, 10, "MIPA A", 1],
        [2, 11, "BAHASA A", 1],
        [3, 12, "IPS A", 1],
        [4, 10, "MIPA B", 2],
        [5, 11, "BAHASA B", 2],
        [6, 12, "IPS B", 2],
    ];

    public function run(): void
    {
        foreach ($this->classes as $class) {
            \App\Models\Classes::create([
                "id" => $class[0],
                "grade" => $class[1],
                "class" => $class[2],
                "institution" => $class[3],
            ]);
        }
    }
}
