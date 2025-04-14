<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $schools = [
        [1, "SMA EXAMPLE 1", 2, 1, 2, 3],
        [2, "SMA EXAMPLE 2", 2, 1, 3, 4],
        [3, "SMA EXAMPLE 3", 2, 1, 4, 5],
        [4, "SMK EXAMPLE 4", 1, 1, 1, 1],
        [5, "SMK EXAMPLE 5", 1, 1, 6, 7],
    ];

    public function run(): void
    {
        foreach ($this->schools as $school) {
            \App\Models\School::create([
                "id" => $school[0],
                "school" => $school[1],
                "type" => $school[2],
                "country" => $school[3],
                "province" => $school[4],
                "city" => $school[5],
            ]);
        }
    }
}
