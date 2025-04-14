<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subdistrict;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $subdistricts = [
        [1, "nama district"], [2, "nama district"], [3, "nama district"] 
    ];

    public function run(): void
    {
        foreach ($this->subdistricts as $subdistrict) {
            Subdistrict::create([
                "city" => $subdistrict[0],
                "subdistrict" => $subdistrict[1]
            ]);
        }
    }
}
