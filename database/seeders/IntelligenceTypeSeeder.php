<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class IntelligenceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $intelligence_types = [
        [1, "Kecerdasan Linguistik-verbal"],
        [2, "Kecerdasan Logika-Matematik"],
        [3, "Kecerdasan Spasial-Visual"],
        [4, "Kecerdasan Kecerdasan Ritmik-Musik"],
        [5, "Kecerdasan Kecerdasan Kinestik"],
        [6, "Kecerdasan Interpersonal"],
        [7, "Kecerdasan Intrapersonal"],
        [8, "Kecerdasan Naturalis"],
        [9, "Kecerdasan Eksistensial"],

    ];

    public function run(): void
    {
        foreach ($this->intelligence_types as $intelligence_type) {
            \App\Models\IntelligenceType::create([
                "id" => $intelligence_type[0],
                "intelligence_type" => $intelligence_type[1],
            ]);
        }
    }
}
