<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $parent_type = [
        [1, "Teacher"],
        [2, "School"],
    ];

    public function run(): void
    {
        foreach ($this->parent_type as $parent_type) {
            \App\Models\ParentType::create([
                "id" => $parent_type[0],
                "type" => $parent_type[1],
            ]);
        }
    }
}
