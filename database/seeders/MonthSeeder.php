<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $months = [
        [1, "januari"],
        [2, "februari"],
        [3, "maret"],
        [4, "april"],
        [5, "mei"],
        [6, "juni"],
        [7, "juli"],
        [8, "agustus"],
        [9, "september"],
        [10, "oktober"],
        [11, "november"],
        [12, "desember"]
    ];

    public function run(): void
    {
        foreach ($this->months as $month) {
            \App\Models\Month::create([
                "id" => $month[0],
                "month" => $month[1],
            ]);
        }
    }
}
