<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $roles = [
        [1, "Admin"],
        [2, "Student"],
        [3, "Institution"],
        [4, "Teacher"],
        [5, "Committee"],
        [6, "Promotor"],
    ];

    public function run(): void
    {
        foreach ($this->roles as $role) {
            \App\Models\Role::create([
                "id" => $role[0],
                "role" => $role[1],
            ]);
        }
    }
}
