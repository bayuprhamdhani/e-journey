<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $majors = [
        [1, 1, "IPA"],
        [2, 1, "IPS"],
        [3, 1, "Bahasa"]
    ];

    public function run(): void
    {
        foreach ($this->majors as $major) {
            \App\Models\Major::create([
                "id" => $major[0],
                "country" => $major[1],
                "major" => $major[2],
            ]);
        }
    }
}
