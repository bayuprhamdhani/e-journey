<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class PromotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $promotors = [
        [1, "Riza", "085895160144", 1, 1, 1, 1]
    ];

    public function run(): void
    {
        foreach ($this->promotors as $promotor) {
            \App\Models\Promotor::create([
                "id" => $promotor[0],
                "name" => $promotor[1],
                "contact" => $promotor[2],
                "country" => $promotor[3],
                "province" => $promotor[4],
                "city" => $promotor[5],
                "subdistrict" => $promotor[6],
            ]);
        }
    }
}
