<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $schools = [
        [1,1, "SMAT RYADLUL ULUM"], [2,1, "SMA NEGERI 7 TASIKMALAYA"], [3,1, "SMA IT IBADURROHMAN"], [4,1, "SMA NEGERI 8 TASIKMALAYA"], [5,1, "SMAN 3 TASIKMALAYA"],
        [6, 2, "SMA INTELIGENSIA"], [7, 2, "SMA AL FALAH KOTA BANDUNG"], [8, 2, "SMAS MUTIARA BUNDA"], [9, 2, "SMAN 9 BANDUNG"], [10, 2, "SMA CITRA CEMARA"],
        [11, 3, "MADRASAH ALIYAH AMAL ISLAMI"], [12, 3, "MAN 1 SUKABUMI"], [13, 3, "MAN 2 SUKABUMI"], [14, 3, "MAS AL ISTIQOMAH"], [15, 3, "MAS BAITURRAHMAN"],
        [16,4, "MA AL ISHLAH"], [17,4, "MA AL MUAWANAH"], [18,4, "MA DAAR EL FIKRI"], [19,4, "MA DARUL FIKRI"], [20,4, "MA MATHLAUL ULUM"],
        [21, 5, "SMA MA'ARIF PEUNDEUY"], [22, 5, "SMA KRIYA BAKTI UTAMA"], [23, 5, "SMA KRISTEN BPPK GARUT"], [24, 5, "SMA ISLAM GALMASIH"], [25, 5, "SMA ISLAM CIKUYA BUNGBULANG"],
        [26, 6, "SMA KRISTEN KALAM KUDUS SURABAYA"], [27, 6, "SMA KRISTEN PETRA 1 SURABAYA"], [28, 6, "SMA KRISTEN PETRA 2 SURABAYA"], [29, 6, "SMA KUSUMA BANGSA"], [30, 6, "SMA KUSUMANAGARA SURABAYA"],
        [31, 7, "SMA MUHAMMADIYAH 3"], [32,7, "SMA NASIONAL"], [33,7, "SMA PANJURA"], [34,7, "SMA PGRI 6 MALANG"], [35,7, "SMA SHALAHUDDIN"],
        [36, 8, "SMK EDITH"], [37, 8, "SMK ISLAM BATU"], [38, 8, "SMK MA`ARIF"], [39, 8, "SMK MUHAMMADIYAH 01 BATU"], [40, 8, "SMK NEGERI 01"],
        [41, 9, "SMK PGRI 4"], [42, 9, "SMK PGRI 4"], [43, 9, "SMK TAMAN SISWA"], [44, 9, "SMK TRIJAYA"], [45, 9, "SMK YP 17"],
        [46, 10, "SMA NU GOMBENGSARI"], [47,10, "SMA NU KALIBARU"], [48,10, "SMA PGRI 2 SRONO"], [49,10, "SMA PGRI 5 TEGALDLIMO"], [50,10, "SMA PGRI 6 GENTENG"],
        [51, 11, "SMA Al Uswah"], [52, 11, "SMA Atthohiriyyah"], [53, 11, "SMA Citischool"], [54, 11, "SMA Dian Kartika"], [55, 11, "SMA Don Bosko"],
        [56, 12, "SMK WIYASA"], [57, 12, "SMK Kesdam"], [58, 12, "SMK (STM) YUDYA KARYA"], [59, 12, "SMK (STM) SATRIA MAGELANG"], [60, 12, "SMK (STM) PUTRA NUSANTARA"],
        [61, 13, "SMA AL-IRSYAD TEGAL"], [62,13, "SMA IHSANIYAH TEGAL"], [63,13, "SMA MUHAMMADIYAH TEGAL"], [64,13, "SMA NAHDLATUL ULAMA KOTA TEGAL"], [65,13, "SMA PANCASAKTI"],
        [66, 14, "SMA AL HIKMAH"], [67, 14, "SMA AN-NURIYYAH"], [68, 14, "SMA BUSTANUL ULUM NU BUMIAYU"], [69, 14, "SMA EMPAT LIMA"], [70, 14, "SMA Islam Taalamul Huda Bumiayu"],
        [71, 15, "SMA A. YANI KARANGPUCUNG"], [72, 15, "SMA A. YANI KAWUNGANTEN"], [73, 15, "SMA AL HIDAYAH SIDAREJA"], [74, 15, "SMA BAHARI CILACAP"], [75, 15, "SMA DIPONEGORO 1 CIPARI"]
    ];

    public function run(): void
    {
        foreach ($this->schools as $school) {
            \App\Models\School::create([
                "id" => $school[0],
                "city" => $school[1],
                "school" => $school[2],
            ]);
        }
    }
}
