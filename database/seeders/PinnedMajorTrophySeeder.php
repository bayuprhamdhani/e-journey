<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class PinnedMajorTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $pinned_major_trophies = [
//generalTrophy1
[1, 2, 1],
[2, 3, 1],
[3, 4, 1],
[4, 5, 1],
[5, 6, 1],
[6, 7, 1],
[7, 8, 1],
[8, 9, 1],
[9, 10, 1],
[10, 11, 1],
[11, 12, 1],
[12, 13, 11],
[13, 14, 11],
[14, 15, 11],
[15, 16, 11],
[16, 17, 11],
[17, 18, 11],
[18, 19, 11],
[19, 20, 11],
[20, 21, 11],
[21, 22, 11],
[22, 23, 21],
[23, 24, 21],
[24, 25, 21],
[25, 26, 21],
[26, 27, 21],
[27, 28, 21],
[28, 29, 21],
[29, 30, 21],
[30, 31, 21],
[31, 32, 21],
[32, 33, 1],
[33, 34, 1],
[34, 35, 1],
[35, 36, 1],
[36, 37, 1],
[37, 38, 1],
[38, 39, 1],
[39, 40, 1],
[40, 41, 1],
[41, 42, 1],
[42, 43, 11],
[43, 44, 11],
[44, 45, 11],
[45, 46, 11],
[46, 47, 11],
[47, 48, 11],
[48, 49, 11],
[49, 50, 11],
[50, 51, 11],
[51, 52, 11],
[52, 53, 21],
[53, 54, 21],
[54, 55, 21],
[55, 56, 21],
[56, 57, 21],
[57, 58, 21],
[58, 59, 21],
[59, 60, 21],
[60, 61, 21],
[61, 62, 21],
[62, 63, 1],
[63, 64, 1],
[64, 65, 1],
[65, 66, 1],
[66, 67, 1],
[67, 68, 1],
[68, 69, 1],
[69, 70, 1],
[70, 71, 1],
[71, 72, 1],

    ];

    public function run(): void
    {
        foreach ($this->pinned_major_trophies as $pinned_major_trophy) {
            \App\Models\PinnedMajorTrophy::create([
                "id" => $pinned_major_trophy[0],
                "user" => $pinned_major_trophy[1],
                "trophy" => $pinned_major_trophy[2]
            ]);
        }
    }
}
