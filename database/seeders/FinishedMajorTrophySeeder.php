<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class FinishedMajorTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $finished_major_trophies = [

        //user2
        [1, 2, 1, "pictFinishedGeneralTrophy/1.jpg"],
        [2, 2, 2, "pictFinishedGeneralTrophy/1.jpg"],
        [3, 2, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [4, 2, 4, "pictFinishedGeneralTrophy/1.jpg"],
        [5, 2, 5, "pictFinishedGeneralTrophy/1.jpg"],
        [6, 2, 6, "pictFinishedGeneralTrophy/1.jpg"],
        [7, 2, 9, "pictFinishedGeneralTrophy/1.jpg"],

        //user3
        [8, 3, 1, "pictFinishedGeneralTrophy/1.jpg"],
        [9, 3, 2, "pictFinishedGeneralTrophy/1.jpg"],
        [10, 3, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [11, 3, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user4
        [12, 4, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [13, 4, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user5
        [14, 5, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [15, 5, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user6
        [16, 6, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [17, 6, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user7
        [18, 7, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [19, 7, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user8
        [20, 8, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [21, 8, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user9
        [22, 9, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [23, 9, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user10
        [24, 10, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [25, 10, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user11
        [26, 11, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [27, 11, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user12
        [28, 12, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [29, 12, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user13
        [30, 13, 11, "pictFinishedGeneralTrophy/1.jpg"],
        [31, 13, 12, "pictFinishedGeneralTrophy/1.jpg"],
        [32, 13, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [33, 13, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user14
        [34, 14, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [35, 14, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user15
        [36, 15, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [37, 15, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user16
        [38, 16, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [39, 16, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user17
        [40, 17, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [41, 17, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user18
        [42, 18, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [43, 18, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user19
        [44, 19, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [45, 19, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user20
        [46, 20, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [47, 20, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user21
        [48, 21, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [49, 21, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user22
        [50, 22, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [51, 22, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user23
        [52, 23, 21, "pictFinishedGeneralTrophy/1.jpg"],
        [53, 23, 22, "pictFinishedGeneralTrophy/1.jpg"],
        [54, 23, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [55, 23, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user24
        [56, 24, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [57, 24, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user25
        [58, 25, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [59, 25, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user26
        [60, 26, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [61, 26, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user27
        [62, 27, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [63, 27, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user28
        [64, 28, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [65, 28, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user29
        [66, 29, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [67, 29, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user30
        [68, 30, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [69, 30, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user31
        [70, 31, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [71, 31, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user32
        [72, 32, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [73, 32, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user33
        [74, 33, 1, "pictFinishedGeneralTrophy/1.jpg"],
        [75, 33, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [76, 33, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user34
        [77, 34, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [78, 34, 4, "pictFinishedGeneralTrophy/1.jpg"],
        [79, 34, 7, "pictFinishedGeneralTrophy/1.jpg"],

        //user35
        [80, 35, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [81, 35, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user36
        [82, 36, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [83, 36, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user37
        [84, 37, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [85, 37, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user38
        [86, 38, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [87, 38, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user39
        [88, 39, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [89, 39, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user40
        [90, 40, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [91, 40, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user41
        [92, 41, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [93, 41, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user42
        [94, 42, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [95, 42, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user43
        [96, 43, 11, "pictFinishedGeneralTrophy/1.jpg"],
        [97, 43, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [98, 43, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user44
        [99, 44, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [100, 44, 14, "pictFinishedGeneralTrophy/1.jpg"],
        [101, 44, 17, "pictFinishedGeneralTrophy/1.jpg"],

        //user45
        [102, 45, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [103, 45, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user46
        [104, 46, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [105, 46, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user47
        [106, 47, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [107, 47, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user48
        [108, 48, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [109, 48, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user49
        [110, 49, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [111, 49, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user50
        [112, 50, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [113, 50, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user51
        [114, 51, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [115, 51, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user52
        [116, 52, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [117, 52, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user53
        [118, 53, 21, "pictFinishedGeneralTrophy/1.jpg"],
        [119, 53, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [120, 53, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user54
        [121, 54, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [122, 54, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user55
        [123, 55, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [124, 55, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user56
        [125, 56, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [126, 56, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user57
        [127, 57, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [128, 57, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user58
        [129, 58, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [130, 58, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user59
        [131, 59, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [132, 59, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user60
        [133, 60, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [134, 60, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user61
        [135, 61, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [136, 61, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user62
        [137, 62, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [138, 62, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user63
        [139, 63, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [140, 63, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user64
        [141, 64, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [142, 64, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user65
        [143, 65, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [144, 65, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user66
        [145, 66, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [146, 66, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user67
        [147, 67, 3, "pictFinishedGeneralTrophy/1.jpg"],
        [148, 67, 4, "pictFinishedGeneralTrophy/1.jpg"],

        //user68
        [149, 68, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [150, 68, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user69
        [151, 69, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [152, 69, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user70
        [153, 70, 13, "pictFinishedGeneralTrophy/1.jpg"],
        [154, 70, 14, "pictFinishedGeneralTrophy/1.jpg"],

        //user71
        [155, 71, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [156, 71, 24, "pictFinishedGeneralTrophy/1.jpg"],

        //user72
        [157, 72, 23, "pictFinishedGeneralTrophy/1.jpg"],
        [158, 72, 24, "pictFinishedGeneralTrophy/1.jpg"]
    ];

    public function run(): void
    {
        foreach ($this->finished_major_trophies as $finished_major_trophy) {
            \App\Models\FinishedMajorTrophy::create([
                "id" => $finished_major_trophy[0],
                "user" => $finished_major_trophy[1],
                "major_trophy" => $finished_major_trophy[2],
                "pict" => $finished_major_trophy[3]
            ]);
        }
    }
}
