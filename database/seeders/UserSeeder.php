<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $users = [
        
        [1, 1, "bayuraina@gmail.com", "123456", 1, "", "", ""],

        //student
        [2, 1, "zalsa@gmail.com", "123456", 2, "", "", ""],
        //condong
        [3, 2, "student1@gmail.com", "123456", 2, "", 2, 1],
        [4, 3, "student2@gmail.com", "123456", 2, "", 2, 1],
        [5, 4, "student3@gmail.com", "123456", 2, "", 2, 1],
        [6, 5, "student4@gmail.com", "123456", 2, "", 2, 1],
        [7, 6, "student5@gmail.com", "123456", 2, "", 2, 1],
        [8, 7, "student6@gmail.com", "123456", 2, "", 2, 1],
        [9, 8, "student7@gmail.com", "123456", 2, "", 2, 1],
        [10, 9, "student8@gmail.com", "123456", 2, "", 2, 1],
        [11, 10, "student9@gmail.com", "123456", 2, "", 2, 1],
        [12, 11, "student10@gmail.com", "123456", 2, "", 2, 1],
        [13, 12, "student11@gmail.com", "123456", 2, "", 2, 1],
        [14, 13, "student12@gmail.com", "123456", 2, "", 2, 1],
        [15, 14, "student13@gmail.com", "123456", 2, "", 2, 1],
        [16, 15, "student14@gmail.com", "123456", 2, "", 2, 1],
        [17, 16, "student15@gmail.com", "123456", 2, "", 2, 1],
        [18, 17, "student16@gmail.com", "123456", 2, "", 2, 1],
        [19, 18, "student17@gmail.com", "123456", 2, "", 2, 1],
        [20, 19, "student18@gmail.com", "123456", 2, "", 2, 1],
        [21, 20, "student19@gmail.com", "123456", 2, "", 2, 1],
        [22, 21, "student20@gmail.com", "123456", 2, "", 2, 1],
        [23, 22, "student21@gmail.com", "123456", 2, "", 2, 1],
        [24, 23, "student22@gmail.com", "123456", 2, "", 2, 1],
        [25, 24, "student23@gmail.com", "123456", 2, "", 2, 1],
        [26, 25, "student24@gmail.com", "123456", 2, "", 2, 1],
        [27, 26, "student25@gmail.com", "123456", 2, "", 2, 1],
        [28, 27, "student26@gmail.com", "123456", 2, "", 2, 1],
        [29, 28, "student27@gmail.com", "123456", 2, "", 2, 1],
        [30, 29, "student28@gmail.com", "123456", 2, "", 2, 1],
        [31, 30, "student29@gmail.com", "123456", 2, "", 2, 1],
        [32, 31, "student30@gmail.com", "123456", 2, "", 2, 1],
        //smansatas
        [33, 32, "student31@gmail.com", "123456", 2, "", 2, 2],
        [34, 33, "student32@gmail.com", "123456", 2, "", 2, 2],
        [35, 34, "student33@gmail.com", "123456", 2, "", 2, 2],
        [36, 35, "student34@gmail.com", "123456", 2, "", 2, 2],
        [37, 36, "student35@gmail.com", "123456", 2, "", 2, 2],
        [38, 37, "student36@gmail.com", "123456", 2, "", 2, 2],
        [39, 38, "student37@gmail.com", "123456", 2, "", 2, 2],
        [40, 39, "student38@gmail.com", "123456", 2, "", 2, 2],
        [41, 40, "student39@gmail.com", "123456", 2, "", 2, 2],
        [42, 41, "student40@gmail.com", "123456", 2, "", 2, 2],
        [43, 42, "student41@gmail.com", "123456", 2, "", 2, 2],
        [44, 43, "student42@gmail.com", "123456", 2, "", 2, 2],
        [45, 44, "student43@gmail.com", "123456", 2, "", 2, 2],
        [46, 45, "student44@gmail.com", "123456", 2, "", 2, 2],
        [47, 46, "student45@gmail.com", "123456", 2, "", 2, 2],
        [48, 47, "student46@gmail.com", "123456", 2, "", 2, 2],
        [49, 48, "student47@gmail.com", "123456", 2, "", 2, 2],
        [50, 49, "student48@gmail.com", "123456", 2, "", 2, 2],
        [51, 50, "student49@gmail.com", "123456", 2, "", 2, 2],
        [52, 51, "student50@gmail.com", "123456", 2, "", 2, 2],
        [53, 52, "student51@gmail.com", "123456", 2, "", 2, 2],
        [54, 53, "student52@gmail.com", "123456", 2, "", 2, 2],
        [55, 54, "student53@gmail.com", "123456", 2, "", 2, 2],
        [56, 55, "student54@gmail.com", "123456", 2, "", 2, 2],
        [57, 56, "student55@gmail.com", "123456", 2, "", 2, 2],
        [58, 57, "student56@gmail.com", "123456", 2, "", 2, 2],
        [59, 58, "student57@gmail.com", "123456", 2, "", 2, 2],
        [60, 59, "student58@gmail.com", "123456", 2, "", 2, 2],
        [61, 60, "student59@gmail.com", "123456", 2, "", 2, 2],
        [62, 61, "student60@gmail.com", "123456", 2, "", 2, 2],
        //promotedByRiza
        [63, 62, "student61@gmail.com", "123456", 2, 1, "", ""],
        [64, 63, "student62@gmail.com", "123456", 2, 1, "", ""],
        [65, 64, "student63@gmail.com", "123456", 2, 1, "", ""],
        [66, 65, "student64@gmail.com", "123456", 2, 1, "", ""],
        [67, 66, "student65@gmail.com", "123456", 2, 1, "", ""],
        [68, 67, "student66@gmail.com", "123456", 2, 1, "", ""],
        [69, 68, "student67@gmail.com", "123456", 2, 1, "", ""],
        [70, 69, "student68@gmail.com", "123456", 2, 1, "", ""],
        [71, 70, "student69@gmail.com", "123456", 2, 1, "", ""],
        [72, 71, "student70@gmail.com", "123456", 2, 1, "", ""],

        //institution
        [73, 1, "condong@gmail.com", "123456", 3, "", "", ""],
        [74, 2, "smansatas@gmail.com", "123456", 3, 1, "", ""],

        //teacher
        [75, 1, "trinanda@gmail.com", "123456", 4, "", "", ""],
        //condongGeneralLesson
        [76, 2, "Teacher1@gmail.com", "123456", 4, "", "", ""],
        [77, 3, "Teacher2@gmail.com", "123456", 4, "", "", ""],
        [78, 4, "Teacher3@gmail.com", "123456", 4, "", "", ""],
        [79, 5, "Teacher4@gmail.com", "123456", 4, "", "", ""],
        [80, 6, "Teacher5@gmail.com", "123456", 4, "", "", ""],
        [81, 7, "Teacher6@gmail.com", "123456", 4, "", "", ""],
        [82, 8, "Teacher7@gmail.com", "123456", 4, "", "", ""],
        [83, 9, "Teacher8@gmail.com", "123456", 4, "", "", ""],
        [84, 10, "Teacher9@gmail.com", "123456", 4, "", "", ""],
        [85, 11, "Teacher10@gmail.com", "123456", 4, "", "", ""],
        //condongMajorLesson
        [86, 12, "Teacher11@gmail.com", "123456", 4, "", "", ""],
        [87, 13, "Teacher12@gmail.com", "123456", 4, "", "", ""],
        [88, 14, "Teacher13@gmail.com", "123456", 4, "", "", ""],
        [89, 15, "Teacher14@gmail.com", "123456", 4, "", "", ""],
        [90, 16, "Teacher15@gmail.com", "123456", 4, "", "", ""],
        [91, 17, "Teacher16@gmail.com", "123456", 4, "", "", ""],
        [92, 18, "Teacher17@gmail.com", "123456", 4, "", "", ""],
        [93, 19, "Teacher18@gmail.com", "123456", 4, "", "", ""],
        [94, 20, "Teacher19@gmail.com", "123456", 4, "", "", ""],
        [95, 21, "Teacher20@gmail.com", "123456", 4, "", "", ""],
        [96, 22, "Teacher21@gmail.com", "123456", 4, "", "", ""],
        [97, 23, "Teacher22@gmail.com", "123456", 4, "", "", ""],
        //smansatasGeneralLesson
        [98, 24, "Teacher23@gmail.com", "123456", 4, "", 2, 1],
        [99, 25, "Teacher24@gmail.com", "123456", 4, "", 2, 1],
        [100, 26, "Teacher25@gmail.com", "123456", 4, "", 2, 1],
        [101, 27, "Teacher26@gmail.com", "123456", 4, "", 2, 1],
        [102, 28, "Teacher27@gmail.com", "123456", 4, "", 2, 1],
        [103, 29, "Teacher28@gmail.com", "123456", 4, "", 2, 1],
        [104, 30, "Teacher29@gmail.com", "123456", 4, "", 2, 1],
        [105, 31, "Teacher30@gmail.com", "123456", 4, "", 2, 1],
        [106, 32, "Teacher31@gmail.com", "123456", 4, "", 2, 1],
        [107, 33, "Teacher32@gmail.com", "123456", 4, "", 2, 1],
        //smansatasMajorLesson
        [108, 34, "Teacher33@gmail.com", "123456", 4, "", 2, 1],
        [109, 35, "Teacher34@gmail.com", "123456", 4, "", 2, 1],
        [110, 36, "Teacher35@gmail.com", "123456", 4, "", 2, 1],
        [111, 37, "Teacher36@gmail.com", "123456", 4, "", 2, 1],
        [112, 38, "Teacher37@gmail.com", "123456", 4, "", 2, 1],
        [113, 39, "Teacher38@gmail.com", "123456", 4, "", 2, 1],
        [114, 40, "Teacher39@gmail.com", "123456", 4, "", 2, 1],
        [115, 41, "Teacher40@gmail.com", "123456", 4, "", 2, 1],
        [116, 42, "Teacher41@gmail.com", "123456", 4, "", 2, 1],
        [117, 43, "Teacher42@gmail.com", "123456", 4, "", 2, 1],
        [118, 44, "Teacher43@gmail.com", "123456", 4, "", 2, 1],
        [119, 45, "Teacher44@gmail.com", "123456", 4, "", 2, 1],

        //committee
        [120, 1, "askesis@gmail.com", "123456", 5, "", "", ""],

        //promotor
        [121, 1, "riza@gmail.com", "123456", 6, "", "", ""],

    ];
    
    public function run(): void
    {
        foreach ($this->users as $user) {
            \App\Models\User::create([
                "id" => $user[0],
                "user" => $user[1],
                "email" => $user[2],
                "password" => $user[3],
                "role" => $user[4],
                "promotor" => $user[5] === "" ? null : $user[5],
                "parent_type" => $user[6]  === "" ? null : $user[6],
                "parent" => $user[7]  === "" ? null : $user[7],
            ]);
        }
    }
}
