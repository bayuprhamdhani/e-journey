<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class FinishedTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $finished_tasks = [
        //student
        //semester 1
        [1, 1, "finishedTaskPict/finishedTask.jpg"],
        [2, 2, "finishedTaskPict/finishedTask.jpg"],
        [3, 3, "finishedTaskPict/finishedTask.jpg"],
        //semester 2
        [4, 8, "finishedTaskPict/finishedTask.jpg"],
        [5, 9, "finishedTaskPict/finishedTask.jpg"],
        [6, 10, "finishedTaskPict/finishedTask.jpg"],
        //semester 3
        [7, 15, "finishedTaskPict/finishedTask.jpg"],
        [8, 16, "finishedTaskPict/finishedTask.jpg"],
        [9, 17, "finishedTaskPict/finishedTask.jpg"],
        //semester 4
        [10, 22, "finishedTaskPict/finishedTask.jpg"],
        [11, 23, "finishedTaskPict/finishedTask.jpg"],
        [12, 24, "finishedTaskPict/finishedTask.jpg"],
        //semester 5
        [13, 29, "finishedTaskPict/finishedTask.jpg"],
        [14, 30, "finishedTaskPict/finishedTask.jpg"],
        [15, 31, "finishedTaskPict/finishedTask.jpg"],
        //semester 6
        [16, 36, "finishedTaskPict/finishedTask.jpg"],
        [17, 37, "finishedTaskPict/finishedTask.jpg"],
        [18, 38, "finishedTaskPict/finishedTask.jpg"],

        //teacher
        //semester 1
        [19, 42, "finishedTaskPict/finishedTask.jpg"],
        [20, 43, "finishedTaskPict/finishedTask.jpg"],
        [21, 44, "finishedTaskPict/finishedTask.jpg"],
        //semester 2
        [22, 49, "finishedTaskPict/finishedTask.jpg"],
        [23, 50, "finishedTaskPict/finishedTask.jpg"],
        [24, 51, "finishedTaskPict/finishedTask.jpg"],
        //semester 3
        [25, 56, "finishedTaskPict/finishedTask.jpg"],
        [26, 57, "finishedTaskPict/finishedTask.jpg"],
        [27, 58, "finishedTaskPict/finishedTask.jpg"],
        //semester 4
        [28, 63, "finishedTaskPict/finishedTask.jpg"],
        [29, 64, "finishedTaskPict/finishedTask.jpg"],
        [30, 65, "finishedTaskPict/finishedTask.jpg"],
        //semester 5
        [31, 70, "finishedTaskPict/finishedTask.jpg"],
        [32, 71, "finishedTaskPict/finishedTask.jpg"],
        [33, 72, "finishedTaskPict/finishedTask.jpg"],
        //semester 6
        [34, 77, "finishedTaskPict/finishedTask.jpg"],
        [35, 78, "finishedTaskPict/finishedTask.jpg"],
        [36, 79, "finishedTaskPict/finishedTask.jpg"],

        //school
        //semester 1
        [37, 84, "finishedTaskPict/finishedTask.jpg"],
        [38, 85, "finishedTaskPict/finishedTask.jpg"],
        [39, 86, "finishedTaskPict/finishedTask.jpg"],
        //semester 2
        [40, 91, "finishedTaskPict/finishedTask.jpg"],
        [41, 92, "finishedTaskPict/finishedTask.jpg"],
        [42, 93, "finishedTaskPict/finishedTask.jpg"],
        //semester 3
        [43, 98, "finishedTaskPict/finishedTask.jpg"],
        [44, 99, "finishedTaskPict/finishedTask.jpg"],
        [45, 100, "finishedTaskPict/finishedTask.jpg"],
        //semester 4
        [46, 105, "finishedTaskPict/finishedTask.jpg"],
        [47, 106, "finishedTaskPict/finishedTask.jpg"],
        [48, 107, "finishedTaskPict/finishedTask.jpg"],
        //semester 5
        [49, 112, "finishedTaskPict/finishedTask.jpg"],
        [50, 113, "finishedTaskPict/finishedTask.jpg"],
        [51, 114, "finishedTaskPict/finishedTask.jpg"],
        //semester 6
        [52, 119, "finishedTaskPict/finishedTask.jpg"],
        [53, 120, "finishedTaskPict/finishedTask.jpg"],
        [54, 121, "finishedTaskPict/finishedTask.jpg"],
    ];

    public function run(): void
    {
        foreach ($this->finished_tasks as $finished_task) {
            \App\Models\FinishedTask::create([
                "id" => $finished_task[0],
                "task" => $finished_task[1],
                "pict" => $finished_task[2],
            ]);
        }
    }
}
