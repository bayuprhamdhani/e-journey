<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $advices = [
        //student
        [1, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/01/01",1],
        [2, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/02/02",1],
        [3, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/03/03",1],
        [4, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/04/04",1],
        [5, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/05/05",1],
        [6, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/06/06",2],
        [7, 2, "Lebih fokus pada meningkatkan pemahaman anatomi tumbuhan","2025/07/07",2],

        //teacher
        [8, 75, "Motivasi siswa dengan cerita pahlawan","2025/01/01",1],
        [9, 75, "Motivasi siswa dengan cerita pahlawan","2025/02/02",1],
        [10, 75, "Motivasi siswa dengan cerita pahlawan","2025/03/03",1],
        [11, 75, "Motivasi siswa dengan cerita pahlawan","2025/04/04",1],
        [12, 75, "Motivasi siswa dengan cerita pahlawan","2025/05/05",1],
        [13, 75, "Motivasi siswa dengan cerita pahlawan","2025/06/06",2],
        [14, 75, "Motivasi siswa dengan cerita pahlawan","2025/07/07",2],
    
        //school
        [15, 73, "Terapkan nilai religi di lingkungan sekolah","2025/01/01",1],
        [16, 73, "Terapkan nilai religi di lingkungan sekolah","2025/02/02",1],
        [17, 73, "Terapkan nilai religi di lingkungan sekolah","2025/03/03",1],
        [18, 73, "Terapkan nilai religi di lingkungan sekolah","2025/04/04",1],
        [19, 73, "Terapkan nilai religi di lingkungan sekolah","2025/05/05",1],
        [20, 73, "Terapkan nilai religi di lingkungan sekolah","2025/06/06",2],
        [21, 73, "Terapkan nilai religi di lingkungan sekolah","2025/07/07",2],
    ];

    public function run(): void
    {
        foreach ($this->advices as $advice) {
            \App\Models\Advice::create([
                "id" => $advice[0],
                "user" => $advice[1],
                "advice" => $advice[2],
                "date" => $advice[3],
                "status" => $advice[4]
            ]);
        }
    }
}
