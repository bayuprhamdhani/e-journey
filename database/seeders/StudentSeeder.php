<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $students = [
        [1, "Zalsa", "202202082", 2022, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, "", 0],

        //condong
        [2, "Student1", "1212121", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [3, "Student2", "2323232", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [4, "Student3", "3434343", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [5, "Student4", "4545454", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [6, "Student5", "5656565", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [7, "Student6", "6767676", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [8, "Student7", "7878787", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [9, "Student8", "8989898", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [10, "Student9", "9191919", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [11, "Student10", "0101010", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 1, 0],
        [12, "Student11", "1111111", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [13, "Student12", "2121212", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [14, "Student13", "3131313", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [15, "Student14", "4141414", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [16, "Student15", "5151515", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [17, "Student16", "6161616", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [18, "Student17", "7171717", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [19, "Student18", "9991919", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [20, "Student19", "9292929", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [21, "Student20", "0202020", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [22, "Student21", "2122212", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [23, "Student22", "2223222", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [24, "Student23", "2324232", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [25, "Student24", "2425242", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [26, "Student25", "2526252", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [27, "Student26", "2627262", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [28, "Student27", "2728272", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [29, "Student28", "2829282", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [30, "Student29", "2930292", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [31, "Student30", "3031303", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],

        //smansatas parented by riza
        [32, "Student31", "3132313", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [33, "Student32", "3233323", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [34, "Student33", "3334333", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [35, "Student34", "3435343", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [36, "Student35", "3536353", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [37, "Student36", "3637363", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [38, "Student37", "3738373", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [39, "Student38", "3839383", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [40, "Student39", "3940394", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [41, "Student40", "4041404", 2024, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, 4, 0],
        [42, "Student41", "4142414", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [43, "Student42", "4243424", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [44, "Student43", "4344434", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [45, "Student44", "4445444", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [46, "Student45", "4546454", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [47, "Student46", "4647464", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [48, "Student47", "4748474", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [49, "Student48", "4849484", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [50, "Student49", "4950494", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [51, "Student50", "5051505", 2023, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, 6, 0],
        [52, "Student51", "5152515", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [53, "Student52", "5253525", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [54, "Student53", "5354535", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [55, "Student54", "5455545", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [56, "Student55", "5556555", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [57, "Student56", "5657565", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [58, "Student57", "5758575", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [59, "Student58", "5859585", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [60, "Student59", "5960595", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],
        [61, "Student60", "6061606", 2022, "081312424171", "studentPict/StudentPict.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, 5, 0],

        //riza
        [62, "Student61", "611611", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, "", 0],
        [63, "Student62", "621621", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, "", 0],
        [64, "Student63", "631631", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, "", 0],
        [65, "Student64", "641641", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, "", 0],
        [66, "Student65", "651651", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 1, "", 0],
        [67, "Student66", "661661", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, "", 0],
        [68, "Student67", "671671", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, "", 0],
        [69, "Student68", "681681", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 2, "", 0],
        [70, "Student69", "691691", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, "", 0],
        [71, "Student70", "701701", 2024, "081312424171", "studentPict/1.jpg", "Lecture", 1, 12, 167, 2370, 2, 3, "", 0],
        
    ];

    public function run(): void
    {
        foreach ($this->students as $student) {
            \App\Models\Student::create([
                "id" => $student[0],
                "name" => $student[1],
                "nis" => $student[2],
                "graduate" => $student[3],
                "contact" => $student[4],
                "pict" => $student[5],
                "dream" => $student[6],
                "country" => $student[7],
                "province" => $student[8],
                "city" => $student[9],
                "subdistrict" => $student[10],
                "type_school" => $student[11],
                "major" => $student[12],
                "class" => $student[13] === "" ? null : $student[13],
                "score" => $student[14]
            ]);
        }
    }
}
