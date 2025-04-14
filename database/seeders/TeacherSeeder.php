<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $teachers = [
        [1, "Trinanda", "202202082", 1, 12, 167, 2370, "", "081312424171", "teacherPict/1.jpg", 0],

        //condong generalLesson
        [2, "Teacher1", "234234234", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [3, "Teacher2", "345345345", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [4, "Teacher3", "456456456", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [5, "Teacher4", "567567567", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [6, "Teacher5", "678678678", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [7, "Teacher6", "789789789", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [8, "Teacher7", "890890890", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [9, "Teacher8", "901901901", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [10, "Teacher9", "10111011", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [11, "Teacher10", "11121112", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        //condong majorLesson
        [12, "Teacher11", "12131213", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [13, "Teacher12", "13141314", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [14, "Teacher13", "14151415", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [15, "Teacher14", "15161516", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [16, "Teacher15", "16171617", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [17, "Teacher16", "17181718", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [18, "Teacher17", "18191819", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [19, "Teacher18", "19201920", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [20, "Teacher19", "20212021", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [21, "Teacher20", "21222122", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [22, "Teacher21", "22232223", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],
        [23, "Teacher22", "23242324", 1, 12, 167, 2370, 1, "081312424171", "teacherPict/teacher.jpg", 0],


        //smansatas generalLesson parented by riza
        [24, "Teacher23", "24252425", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [25, "Teacher24", "25262526", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [26, "Teacher25", "26272627", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [27, "Teacher26", "27282728", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [28, "Teacher27", "28292829", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [29, "Teacher28", "29302930", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [30, "Teacher29", "30313031", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [31, "Teacher30", "31323132", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [32, "Teacher31", "32333233", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [33, "Teacher32", "33343334", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        //smansatas majorLesson parented by riza
        [34, "Teacher33", "34353435", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [35, "Teacher34", "35363536", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [36, "Teacher35", "36373637", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [37, "Teacher36", "37383738", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [38, "Teacher37", "38393839", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [39, "Teacher38", "39403940", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [40, "Teacher39", "40414041", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [41, "Teacher40", "41424142", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [42, "Teacher41", "42434243", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [43, "Teacher42", "43444344", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [44, "Teacher43", "44454445", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],
        [45, "Teacher44", "45464546", 1, 12, 167, 2370, 2, "081312424171", "teacherPict/teacher.jpg", 0],

        //riza
        [46, "Teacher45", "46474647", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [47, "Teacher46", "47484748", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [48, "Teacher47", "48494849", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [49, "Teacher48", "49504950", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [50, "Teacher49", "50515051", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [51, "Teacher50", "51525152", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [52, "Teacher51", "52535253", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [53, "Teacher52", "53545354", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [54, "Teacher53", "54555455", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],
        [55, "Teacher54", "55565556", 1, 12, 167, 2370, "", "081312424171", "teacherPict/teacher.jpg", 0],

    ];

    public function run(): void
    {
        foreach ($this->teachers as $teacher) {
            \App\Models\Teacher::create([
                "id" => $teacher[0],
                "name" => $teacher[1],
                "nuptk" => $teacher[2],
                "country" => $teacher[3],
                "province" => $teacher[4],
                "city" => $teacher[5],
                "subdistrict" => $teacher[6],
                "institution" => $teacher[7] === "" ? null : $teacher[7],
                "contact" => $teacher[8],
                "pict" => $teacher[9],
                "score" => $teacher[10]
            ]);
        }
    }
}
