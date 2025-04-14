<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $institutions = [
        [1, 2, "SMAT Ryadlul Ulum", "20224512", 1, 12, 167, "logoInstitution/1.jpg", "081312424171", 0],
        [2, 2, "SMAN 1 Tasikmalaya", "20224511", 1, 12, 167, "logoInstitution/2.jpg", "085895160144", 0]
    ];

    public function run(): void
    {
        foreach ($this->institutions as $institution) {
            \App\Models\Institution::create([
                "id" => $institution[0],
                "type" => $institution[1],
                "school" => $institution[2],
                "npsn" => $institution[3],
                "country" => $institution[4],
                "province" => $institution[5],
                "city" => $institution[6],
                "logo" => $institution[7],
                "contact" => $institution[8],
                "score" => $institution[9],
            ]);
        }
    }
}
