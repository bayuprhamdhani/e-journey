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
        [1, "Zalsa", "202202082", 2022, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 1, "", 0, 12112370],
    
        //condong
        [2, "Student1", "1212121", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12122370],
        [3, "Student2", "2323232", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12132370],
        [4, "Student3", "3434343", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12142370],
        [5, "Student4", "4545454", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12152370],
        [6, "Student5", "5656565", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12162370],
        [7, "Student6", "6767676", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12172370],
        [8, "Student7", "7878787", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12182370],
        [9, "Student8", "8989898", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 12192370],
        [10, "Student9", "9191919", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 121102370],
        [11, "Student10", "0101010", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 1, 0, 121112370],
        [12, "Student11", "1111111", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121122370],
        [13, "Student12", "2121212", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121132370],
        [14, "Student13", "3131313", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121142370],
        [15, "Student14", "4141414", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121152370],
        [16, "Student15", "5151515", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121162370],
        [17, "Student16", "6161616", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121172370],
        [18, "Student17", "7171717", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121182370],
        [19, "Student18", "9991919", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121192370],
        [20, "Student19", "9292929", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121202370],
        [21, "Student20", "0202020", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121212370],
        [22, "Student21", "2122212", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121222370],
        [23, "Student22", "2223222", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121232370],
        [24, "Student23", "2324232", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121242370],
        [25, "Student24", "2425242", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121252370],
        [26, "Student25", "2526252", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121262370],
        [27, "Student26", "2627262", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121272370],
        [28, "Student27", "2728272", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121282370],
        [29, "Student28", "2829282", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121292370],
        [30, "Student29", "2930292", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121302370],
        [31, "Student30", "3031303", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121312370],
    
        //smansatas parented by riza
        [32, "Student31", "3132313", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121322370],
        [33, "Student32", "3233323", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121332370],
        [34, "Student33", "3334333", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121342370],
        [35, "Student34", "3435343", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121352370],
        [36, "Student35", "3536353", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121362370],
        [37, "Student36", "3637363", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121372370],
        [38, "Student37", "3738373", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121382370],
        [39, "Student38", "3839383", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121392370],
        [40, "Student39", "3940394", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121402370],
        [41, "Student40", "4041404", 2024, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 1, 4, 0, 121412370],
        [42, "Student41", "4142414", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121422370],
        [43, "Student42", "4243424", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121432370],
        [44, "Student43", "4344434", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121442370],
        [45, "Student44", "4445444", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121452370],
        [46, "Student45", "4546454", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121462370],
        [47, "Student46", "4647464", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121472370],
        [48, "Student47", "4748474", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121482370],
        [49, "Student48", "4849484", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121492370],
        [50, "Student49", "4950494", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121502370],
        [51, "Student50", "5051505", 2023, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 2, 6, 0, 121512370],
        [52, "Student51", "5152515", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121522370],
        [53, "Student52", "5253525", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121532370],
        [54, "Student53", "5354535", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121542370],
        [55, "Student54", "5455545", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121552370],
        [56, "Student55", "5556555", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121562370],
        [57, "Student56", "5657565", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121572370],
        [58, "Student57", "5758575", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121582370],
        [59, "Student58", "5859585", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121592370],
        [60, "Student59", "5960595", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121602370],
        [61, "Student60", "6061606", 2022, "081312424171", "studentPict/StudentPict.jpg", " ", 1, 12, 167, 2370, 2, 3, 5, 0, 121612370],
    
        //riza
        [62, "Student61", "611611", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 1, "", 0, 121622370],
        [63, "Student62", "621621", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 1, "", 0, 121632370],
        [64, "Student63", "631631", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 1, "", 0, 121642370],
        [65, "Student64", "641641", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 1, "", 0, 121652370],
        [66, "Student65", "651651", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 1, "", 0, 121662370],
        [67, "Student66", "661661", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 2, "", 0, 121672370],
        [68, "Student67", "671671", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 2, "", 0, 121682370],
        [69, "Student68", "681681", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 2, "", 0, 121692370],
        [70, "Student69", "691691", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 3, "", 0, 121702370],
        [71, "Student70", "701701", 2024, "081312424171", "studentPict/1.jpg", " ", 1, 12, 167, 2370, 2, 3, "", 0, 121712370],
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
                "score" => $student[14],
                "pin" => $student[15],
            ]);
        }
    }
}
