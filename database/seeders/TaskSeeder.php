<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $tasks = [
        //student1
        //semester 1
        [1, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        [2, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        [3, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        [4, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        [5, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        [6, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        [7, "Rangkum materi teori kuantum", 50, 2, 1, 1, 1],
        //semester 2
        [8, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        [9, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        [10, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        [11, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        [12, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        [13, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        [14, "Rangkum materi teori kuantum", 50, 2, 2, 6, 1],
        //semester 3
        [15, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        [16, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        [17, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        [18, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        [19, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        [20, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        [21, "Rangkum materi teori kuantum", 50, 2, 3, 1, 1],
        //semester 4
        [22, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        [23, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        [24, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        [25, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        [26, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        [27, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        [28, "Rangkum materi teori kuantum", 50, 2, 4, 6, 1],
        //semester 5
        [29, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        [30, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        [31, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        [32, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        [33, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        [34, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        [35, "Rangkum materi teori kuantum", 50, 2, 5, 1, 1],
        //semester 6
        [36, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],
        [37, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],
        [38, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],
        [39, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],
        [40, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],
        [41, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],
        [42, "Rangkum materi teori kuantum", 50, 2, 6, 6, 1],

        //teacher
        //semester 1
        [43, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        [44, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        [45, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        [46, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        [47, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        [48, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        [49, "Buat materi ajar yang melibatkan siswa", 50, 75, 1, 1, 1],
        //semester 2
        [50, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        [51, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        [52, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        [53, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        [54, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        [55, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        [56, "Buat materi ajar yang melibatkan siswa", 50, 75, 2, 6, 1],
        //semester 3
        [57, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        [58, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        [59, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        [60, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        [61, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        [62, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        [63, "Buat materi ajar yang melibatkan siswa", 50, 75, 3, 1, 1],
        //semester 4
        [64, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        [65, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        [66, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        [67, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        [68, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        [69, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        [70, "Buat materi ajar yang melibatkan siswa", 50, 75, 4, 6, 1],
        //semester 5
        [71, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        [72, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        [73, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        [74, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        [75, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        [76, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        [77, "Buat materi ajar yang melibatkan siswa", 50, 75, 5, 1, 1],
        //semester 6
        [78, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],
        [79, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],
        [80, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],
        [81, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],
        [82, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],
        [83, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],
        [84, "Buat materi ajar yang melibatkan siswa", 50, 75, 6, 6, 1],

        //school
        //semester 1
        [85, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        [86, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        [87, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        [88, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        [89, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        [90, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        [91, "Analisa kedekatan murid dan guru", 50, 73, 1, 1, 1],
        //semester 2
        [92, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        [93, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        [94, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        [95, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        [96, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        [97, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        [98, "Analisa kedekatan murid dan guru", 50, 73, 2, 6, 1],
        //semester 3
        [99, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        [100, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        [101, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        [102, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        [103, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        [104, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        [105, "Analisa kedekatan murid dan guru", 50, 73, 3, 1, 1],
        //semester 4
        [106, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        [107, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        [108, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        [109, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        [110, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        [111, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        [112, "Analisa kedekatan murid dan guru", 50, 73, 4, 6, 1],
        //semester 5
        [113, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        [114, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        [115, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        [116, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        [117, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        [118, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        [119, "Analisa kedekatan murid dan guru", 50, 73, 5, 1, 1],
        //semester 6
        [120, "Analisa kedekatan murid dan guru", 50, 73, 6, 6, 1],
        [121, "Analisa kedekatan murid dan guru", 50, 73, 6, 6, 1],
        [122, "Analisa kedekatan murid dan guru", 50, 73, 6, 6, 1],
        [123, "Analisa kedekatan murid dan guru", 50, 73, 6, 6, 1],
        [124, "Analisa kedekatan murid dan guru", 50, 73, 6, 6, 1],
        [125, "Analisa kedekatan murid dan guru", 50, 73, 6, 6, 1]
    ];

    public function run(): void
    {
        foreach ($this->tasks as $promotor) {
            \App\Models\Task::create([
                "id" => $promotor[0],
                "task" => $promotor[1],
                "score" => $promotor[2],
                "user" => $promotor[3],
                "semester" => $promotor[4],
                "month" => $promotor[5],
                "week" => $promotor[6],
            ]);
        }
    }
}
