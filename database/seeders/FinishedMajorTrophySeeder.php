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
        [1, 2, 1, "pictFinishedGeneralTrophy/1.jpg", 1],
        [2, 2, 2, "pictFinishedGeneralTrophy/1.jpg", 1],
        [3, 2, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [4, 2, 4, "pictFinishedGeneralTrophy/1.jpg", 1],
        [5, 2, 5, "pictFinishedGeneralTrophy/1.jpg", 1],
        [6, 2, 6, "pictFinishedGeneralTrophy/1.jpg", 1],
        [7, 2, 9, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user3
        [8, 3, 1, "pictFinishedGeneralTrophy/1.jpg", 1],
        [9, 3, 2, "pictFinishedGeneralTrophy/1.jpg", 1],
        [10, 3, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [11, 3, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user4
        [12, 4, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [13, 4, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user5
        [14, 5, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [15, 5, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user6
        [16, 6, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [17, 6, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user7
        [18, 7, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [19, 7, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user8
        [20, 8, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [21, 8, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user9
        [22, 9, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [23, 9, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user10
        [24, 10, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [25, 10, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user11
        [26, 11, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [27, 11, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user12
        [28, 12, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [29, 12, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user13
        [30, 13, 11, "pictFinishedGeneralTrophy/1.jpg", 1],
        [31, 13, 12, "pictFinishedGeneralTrophy/1.jpg", 1],
        [32, 13, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [33, 13, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user14
        [34, 14, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [35, 14, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user15
        [36, 15, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [37, 15, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user16
        [38, 16, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [39, 16, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user17
        [40, 17, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [41, 17, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user18
        [42, 18, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [43, 18, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user19
        [44, 19, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [45, 19, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user20
        [46, 20, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [47, 20, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user21
        [48, 21, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [49, 21, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user22
        [50, 22, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [51, 22, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user23
        [52, 23, 21, "pictFinishedGeneralTrophy/1.jpg", 1],
        [53, 23, 22, "pictFinishedGeneralTrophy/1.jpg", 1],
        [54, 23, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [55, 23, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user24
        [56, 24, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [57, 24, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user25
        [58, 25, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [59, 25, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user26
        [60, 26, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [61, 26, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user27
        [62, 27, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [63, 27, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user28
        [64, 28, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [65, 28, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user29
        [66, 29, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [67, 29, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user30
        [68, 30, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [69, 30, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user31
        [70, 31, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [71, 31, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user32
        [72, 32, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [73, 32, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user33
        [74, 33, 1, "pictFinishedGeneralTrophy/1.jpg", 1],
        [75, 33, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [76, 33, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user34
        [77, 34, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [78, 34, 4, "pictFinishedGeneralTrophy/1.jpg", 1],
        [79, 34, 7, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user35
        [80, 35, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [81, 35, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user36
        [82, 36, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [83, 36, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user37
        [84, 37, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [85, 37, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user38
        [86, 38, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [87, 38, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user39
        [88, 39, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [89, 39, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user40
        [90, 40, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [91, 40, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user41
        [92, 41, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [93, 41, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user42
        [94, 42, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [95, 42, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user43
        [96, 43, 11, "pictFinishedGeneralTrophy/1.jpg", 1],
        [97, 43, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [98, 43, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user44
        [99, 44, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [100, 44, 14, "pictFinishedGeneralTrophy/1.jpg", 1],
        [101, 44, 17, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user45
        [102, 45, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [103, 45, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user46
        [104, 46, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [105, 46, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user47
        [106, 47, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [107, 47, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user48
        [108, 48, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [109, 48, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user49
        [110, 49, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [111, 49, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user50
        [112, 50, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [113, 50, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user51
        [114, 51, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [115, 51, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user52
        [116, 52, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [117, 52, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user53
        [118, 53, 21, "pictFinishedGeneralTrophy/1.jpg", 1],
        [119, 53, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [120, 53, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user54
        [121, 54, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [122, 54, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user55
        [123, 55, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [124, 55, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user56
        [125, 56, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [126, 56, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user57
        [127, 57, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [128, 57, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user58
        [129, 58, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [130, 58, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user59
        [131, 59, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [132, 59, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user60
        [133, 60, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [134, 60, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user61
        [135, 61, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [136, 61, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user62
        [137, 62, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [138, 62, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user63
        [139, 63, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [140, 63, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user64
        [141, 64, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [142, 64, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user65
        [143, 65, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [144, 65, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user66
        [145, 66, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [146, 66, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user67
        [147, 67, 3, "pictFinishedGeneralTrophy/1.jpg", 1],
        [148, 67, 4, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user68
        [149, 68, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [150, 68, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user69
        [151, 69, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [152, 69, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user70
        [153, 70, 13, "pictFinishedGeneralTrophy/1.jpg", 1],
        [154, 70, 14, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user71
        [155, 71, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [156, 71, 24, "pictFinishedGeneralTrophy/1.jpg", 1],

        //user72
        [157, 72, 23, "pictFinishedGeneralTrophy/1.jpg", 1],
        [158, 72, 24, "pictFinishedGeneralTrophy/1.jpg", 1]
    ];

    public function run(): void
    {
        foreach ($this->finished_major_trophies as $finished_major_trophy) {
            \App\Models\FinishedMajorTrophy::create([
                "id" => $finished_major_trophy[0],
                "user" => $finished_major_trophy[1],
                "trophy" => $finished_major_trophy[2],
                "pict" => $finished_major_trophy[3],
                "status" => $finished_major_trophy[4]
            ]);
        }
    }
}
