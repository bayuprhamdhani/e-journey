<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class PinnedGeneralTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $pinned_general_trophies = [
//generalTrophy1
[1, 2, 7],
[2, 3, 7],
[3, 4, 7],
[4, 5, 7],
[5, 6, 7],
[6, 7, 7],
[7, 8, 7],
[8, 9, 7],
[9, 10, 7],
[10, 11, 7],
[11, 12, 7],
[12, 13, 7],
[13, 14, 7],
[14, 15, 7],
[15, 16, 7],
[16, 17, 7],
[17, 18, 7],
[18, 19, 7],
[19, 20, 7],
[20, 21, 7],
[21, 22, 7],
[22, 23, 7],
[23, 24, 7],
[24, 25, 7],
[25, 26, 7],
[26, 27, 7],
[27, 28, 7],
[28, 29, 7],
[29, 30, 7],
[30, 31, 7],
[31, 32, 7],
[32, 33, 7],
[33, 34, 7],
[34, 35, 7],
[35, 36, 7],
[36, 37, 7],
[37, 38, 7],
[38, 39, 7],
[39, 40, 7],
[40, 41, 7],
[41, 42, 7],
[42, 43, 7],
[43, 44, 7],
[44, 45, 7],
[45, 46, 7],
[46, 47, 7],
[47, 48, 7],
[48, 49, 7],
[49, 50, 7],
[50, 51, 7],
[51, 52, 7],
[52, 53, 7],
[53, 54, 7],
[54, 55, 7],
[55, 56, 7],
[56, 57, 7],
[57, 58, 7],
[58, 59, 7],
[59, 60, 7],
[60, 61, 7],
[61, 62, 7],
[62, 63, 7],
[63, 64, 7],
[64, 65, 7],
[65, 66, 7],
[66, 67, 7],
[67, 68, 7],
[68, 69, 7],
[69, 70, 7],
[70, 71, 7],
[71, 72, 7],

    ];

    public function run(): void
    {
        foreach ($this->pinned_general_trophies as $pinned_general_trophy) {
            \App\Models\PinnedGeneralTrophy::create([
                "id" => $pinned_general_trophy[0],
                "user" => $pinned_general_trophy[1],
                "trophy" => $pinned_general_trophy[2]
            ]);
        }
    }
}
