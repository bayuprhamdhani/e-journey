<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $type_schools = [
        [1, "SMK", 1],
        [2, "SMA", 1]
    ];

    public function run(): void
    {
        foreach ($this->type_schools as $type_school) {
            \App\Models\TypeSchool::create([
                "id" => $type_school[0],
                "type" => $type_school[1],
                "country" => $type_school[2],
            ]);
        }
    }
}
