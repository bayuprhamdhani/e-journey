<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $provinces = [
        [1, 1, "ACEH"],
        [2, 1, "SUMATERA UTARA"],
        [3, 1, "SUMATERA BARAT"],
        [4, 1, "RIAU"],
        [5, 1, "JAMBI"],
        [6, 1, "SUMATERA SELATAN"],
        [7, 1, "BENGKULU"],
        [8, 1, "LAMPUNG"],
        [9, 1, "KEPULAUAN BANGKA BELITUNG"],
        [10, 1, "KEPULAUAN RIAU"],
        [11, 1, "DKI JAKARTA"],
        [12, 1, "JAWA BARAT"],
        [13, 1, "JAWA TENGAH"],
        [14, 1, "DI YOGYAKARTA"],
        [15, 1, "JAWA TIMUR"],
        [16, 1, "BANTEN"],
        [17, 1, "BALI"],
        [18, 1, "NUSA TENGGARA BARAT"],
        [19, 1, "NUSA TENGGARA TIMUR"],
        [20, 1, "KALIMANTAN BARAT"],
        [21, 1, "KALIMANTAN TENGAH"],
        [22, 1, "KALIMANTAN SELATAN"],
        [23, 1, "KALIMANTAN TIMUR"],
        [24, 1, "KALIMANTAN UTARA"],
        [25, 1, "SULAWESI UTARA"],
        [26, 1, "SULAWESI TENGAH"],
        [27, 1, "SULAWESI SELATAN"],
        [28, 1, "SULAWESI TENGGARA"],
        [29, 1, "GORONTALO"],
        [30, 1, "SULAWESI BARAT"],
        [31, 1, "MALUKU"],
        [32, 1, "MALUKU UTARA"],
        [33, 1, "PAPUA"],
        [34, 1, "PAPUA BARAT"]
    ];

    public function run(): void
    {
        foreach ($this->provinces as $province) {
            \App\Models\Province::create([
                "id" => $province[0],
                "country" => $province[1],
                "province" => $province[2]
            ]);
        }
    }
}
