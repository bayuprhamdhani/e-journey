<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $majors = [
        [1, "MIPA", 2],
        [2, "IPS", 2],
        [3, "Bahasa", 2],
        [4, "Rekayasa Perangkat Lunak", 1],
        [5, "Teknik Komputer dan Jaringan", 1],
        [6, "Teknik Kendaraan Ringan Otomotif", 1],
        [7, "Teknik Pemesinan", 1],
        [8, "Keperawatan", 1],
        [9, "Farmasi", 1],
        [10, "Akuntansi", 1],
        [11, "Pemasaran", 1],
        [12, "Perhotelan", 1],
        [13, "Tata Boga", 1],
        [14, "Desain Komunikasi Visual", 1],
        [15, "Seni Musik", 1]
    ];

    public function run(): void
    {
        foreach ($this->majors as $major) {
            \App\Models\Major::create([
                "id" => $major[0],
                "major" => $major[1],
                "type_school" => $major[2]
            ]);
        }
    }
}
