<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $committees = [
        [1, "Askesis", "Ahmad", "081312424171", "committePict/1.jpg", 1, 12, 167, 2370],
        [2, "Mandala", "Fulan", "081312424171", "committePict/2.jpg", 1, 12, 167, 2370],
        [3, "Aksara", "Fulanah", "081312424171", "committePict/3.jpg", 1, 12, 167, 2370]
    ];

    public function run(): void
    {
        foreach ($this->committees as $committee) {
            \App\Models\Committee::create([
                "id" => $committee[0],
                "name" => $committee[1],
                "principal" => $committee[2],
                "contact" => $committee[3],
                "logo" => $committee[4],
                "country" => $committee[5],
                "province" => $committee[6],
                "city" => $committee[7],
                "subdistrict" => $committee[7],
            ]);
        }
    }
}
