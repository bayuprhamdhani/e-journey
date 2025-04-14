<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $cities = [
        // Aceh (province_id = 1)
        [1, 1, "PIDIE JAYA"], [2, 1, "SIMEULUE"], [3, 1, "BIREUEN"], 
        [4, 1, "ACEH TIMUR"], [5, 1, "ACEH UTARA"], [6, 1, "PIDIE"], 
        [7, 1, "ACEH BARAT DAYA"], [8, 1, "GAYO LUES"], [9, 1, "ACEH SELATAN"], 
        [10, 1, "ACEH TAMIANG"], [11, 1, "ACEH BESAR"], [12, 1, "ACEH TENGGARA"], 
        [13, 1, "BENER MERIAH"], [14, 1, "ACEH JAYA"], [15, 1, "LHOKSEUMAWE"], 
        [16, 1, "ACEH BARAT"], [17, 1, "NAGAN RAYA"], [18, 1, "LANGSA"], 
        [19, 1, "BANDA ACEH"], [20, 1, "ACEH SINGKIL"], [21, 1, "SABANG"], 
        [22, 1, "ACEH TENGAH"], [23, 1, "SUBULUSSALAM"],
        
        // Sumatera Utara (province_id = 2)
        [24, 2, "NIAS SELATAN"], [25, 2, "MANDAILING NATAL"], [26, 2, "DAIRI"], 
        [27, 2, "LABUHAN BATU UTARA"], [28, 2, "TAPANULI UTARA"], [29, 2, "SIMALUNGUN"], 
        [30, 2, "LANGKAT"], [31, 2, "SERDANG BEDAGAI"], [32, 2, "TAPANULI SELATAN"], 
        [33, 2, "ASAHAN"], [34, 2, "PADANG LAWAS UTARA"], [35, 2, "PADANG LAWAS"], 
        [36, 2, "LABUHAN BATU SELATAN"], [37, 2, "PADANG SIDEMPUAN"], [38, 2, "TOBA SAMOSIR"], 
        [39, 2, "TAPANULI TENGAH"], [40, 2, "HUMBANG HASUNDUTAN"], [41, 2, "SIBOLGA"], 
        [42, 2, "BATU BARA"], [43, 2, "SAMOSIR"], [44, 2, "PEMATANG SIANTAR"], 
        [45, 2, "LABUHAN BATU"], [46, 2, "DELI SERDANG"], [47, 2, "GUNUNGSITOLI"], 
        [48, 2, "NIAS UTARA"], [49, 2, "NIAS"], [50, 2, "KARO"], 
        [51, 2, "NIAS BARAT"], [52, 2, "MEDAN"], [53, 2, "PAKPAK BHARAT"], 
        [54, 2, "TEBING TINGGI"], [55, 2, "BINJAI"], [56, 2, "TANJUNG BALAI"],
        
        // Sumatera Barat (province_id = 3)
        [57, 3, "DHARMASRAYA"], [58, 3, "SOLOK SELATAN"], [59, 3, "SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)"], 
        [60, 3, "PASAMAN BARAT"], [61, 3, "SOLOK"], [62, 3, "PASAMAN"], 
        [63, 3, "PARIAMAN"], [64, 3, "TANAH DATAR"], [65, 3, "PADANG PARIAMAN"], 
        [66, 3, "PESISIR SELATAN"], [67, 3, "PADANG"], [68, 3, "SAWAH LUNTO"], 
        [69, 3, "LIMA PULUH KOTO / KOTA"], [70, 3, "AGAM"], [71, 3, "PAYAKUMBUH"], 
        [72, 3, "BUKITTINGGI"], [73, 3, "PADANG PANJANG"], [74, 3, "KEPULAUAN MENTAWAI"],
        
        // Riau (province_id = 4)
        [75, 4, "INDRAGIRI HILIR"], [76, 4, "KUANTAN SINGINGI"], [77, 4, "PELALAWAN"], 
        [78, 4, "PEKANBARU"], [79, 4, "ROKAN HILIR"], [80, 4, "BENGKALIS"], 
        [81, 4, "INDRAGIRI HULU"], [82, 4, "ROKAN HULU"], [83, 4, "KAMPAR"], 
        [84, 4, "KEPULAUAN MERANTI"], [85, 4, "DUMAI"], [86, 4, "SIAK"],
        
        // Jambi (province_id = 5)
        [87, 5, "TEBO"], [88, 5, "TANJUNG JABUNG BARAT"], [89, 5, "MUARO JAMBI"], 
        [90, 5, "KERINCI"], [91, 5, "MERANGIN"], [92, 5, "BUNGO"], 
        [93, 5, "TANJUNG JABUNG TIMUR"], [94, 5, "SUNGAIPENUH"], [95, 5, "BATANG HARI"], 
        [96, 5, "JAMBI"], [97, 5, "SAROLANGUN"],
        
        // Sumatera Selatan (province_id = 6)
        [98, 6, "PALEMBANG"], [99, 6, "LAHAT"], [100, 6, "OGAN KOMERING ULU TIMUR"], 
        [101, 6, "MUSI BANYUASIN"], [102, 6, "PAGAR ALAM"], [103, 6, "OGAN KOMERING ULU SELATAN"], 
        [104, 6, "BANYUASIN"], [105, 6, "MUSI RAWAS"], [106, 6, "MUARA ENIM"], 
        [107, 6, "OGAN KOMERING ULU"], [108, 6, "OGAN KOMERING ILIR"], [109, 6, "EMPAT LAWANG"], 
        [110, 6, "LUBUK LINGGAU"], [111, 6, "PRABUMULIH"], [112, 6, "OGAN ILIR"],
        
        // Bengkulu (province_id = 7)
        [113, 7, "BENGKULU TENGAH"], [114, 7, "REJANG LEBONG"], [115, 7, "MUKO MUKO"], 
        [116, 7, "KAUR"], [117, 7, "BENGKULU UTARA"], [118, 7, "LEBONG"], 
        [119, 7, "KEPAHIANG"], [120, 7, "BENGKULU SELATAN"], [121, 7, "SELUMA"], 
        [122, 7, "BENGKULU"],
        
        // Lampung (province_id = 8)
        [123, 8, "LAMPUNG UTARA"], [124, 8, "WAY KANAN"], [125, 8, "LAMPUNG TENGAH"], 
        [126, 8, "MESUJI"], [127, 8, "PRINGSEWU"], [128, 8, "LAMPUNG TIMUR"], 
        [129, 8, "LAMPUNG SELATAN"], [130, 8, "TULANG BAWANG"], [131, 8, "TULANG BAWANG BARAT"], 
        [132, 8, "TANGGAMUS"], [133, 8, "LAMPUNG BARAT"], [134, 8, "PESISIR BARAT"], 
        [135, 8, "PESAWARAN"], [136, 8, "BANDAR LAMPUNG"], [137, 8, "METRO"],
        
        // Kepulauan Bangka Belitung (province_id = 9)
        [138, 9, "BELITUNG"], [139, 9, "BELITUNG TIMUR"], [140, 9, "BANGKA"], 
        [141, 9, "BANGKA SELATAN"], [142, 9, "BANGKA BARAT"], [143, 9, "PANGKAL PINANG"], 
        [144, 9, "BANGKA TENGAH"],
        
        // Kepulauan Riau (province_id = 10)
        [145, 10, "KEPULAUAN ANAMBAS"], [146, 10, "BINTAN"], [147, 10, "NATUNA"], 
        [148, 10, "BATAM"], [149, 10, "TANJUNG PINANG"], [150, 10, "KARIMUN"], 
        [151, 10, "LINGGA"],
        
        // DKI Jakarta (province_id = 11)
        [152, 11, "JAKARTA UTARA"], [153, 11, "JAKARTA BARAT"], [154, 11, "JAKARTA TIMUR"], 
        [155, 11, "JAKARTA SELATAN"], [156, 11, "JAKARTA PUSAT"], [157, 11, "KEPULAUAN SERIBU"],
        
        // Jawa Barat (province_id = 12)
        [158, 12, "DEPOK"], [159, 12, "KARAWANG"], [160, 12, "CIREBON"], 
        [161, 12, "BANDUNG"], [162, 12, "SUKABUMI"], [163, 12, "SUMEDANG"], 
        [164, 12, "INDRAMAYU"], [165, 12, "MAJALENGKA"], [166, 12, "KUNINGAN"], 
        [167, 12, "TASIKMALAYA"], [168, 12, "CIAMIS"], [169, 12, "SUBANG"], 
        [170, 12, "PURWAKARTA"], [171, 12, "BOGOR"], [172, 12, "BEKASI"], 
        [173, 12, "GARUT"], [174, 12, "PANGANDARAN"], [175, 12, "CIANJUR"], 
        [176, 12, "BANJAR"], [177, 12, "BANDUNG BARAT"], [178, 12, "CIMAHI"],
        
        // Jawa Tengah (province_id = 13)
        [179, 13, "PURBALINGGA"], [180, 13, "KEBUMEN"], [181, 13, "MAGELANG"], 
        [182, 13, "CILACAP"], [183, 13, "BATANG"], [184, 13, "BANJARNEGARA"], 
        [185, 13, "BLORA"], [186, 13, "BREBES"], [187, 13, "BANYUMAS"], 
        [188, 13, "WONOSOBO"], [189, 13, "TEGAL"], [190, 13, "PURWOREJO"], 
        [191, 13, "PATI"], [192, 13, "SUKOHARJO"], [193, 13, "KARANGANYAR"], 
        [194, 13, "PEKALONGAN"], [195, 13, "PEMALANG"], [196, 13, "BOYOLALI"], 
        [197, 13, "GROBOGAN"], [198, 13, "SEMARANG"], [199, 13, "DEMAK"], 
        [200, 13, "REMBANG"], [201, 13, "KLATEN"], [202, 13, "KUDUS"], 
        [203, 13, "TEMANGGUNG"], [204, 13, "SRAGEN"], [205, 13, "JEPARA"], 
        [206, 13, "WONOGIRI"], [207, 13, "KENDAL"], [208, 13, "SURAKARTA (SOLO)"], 
        [209, 13, "SALATIGA"],
        
        // DI Yogyakarta (province_id = 14)
        [210, 14, "SLEMAN"], [211, 14, "BANTUL"], [212, 14, "YOGYAKARTA"], 
        [213, 14, "GUNUNG KIDUL"], [214, 14, "KULON PROGO"],
        
        // Jawa Timur (province_id = 15)
        [215, 15, "GRESIK"], [216, 15, "KEDIRI"], [217, 15, "SAMPANG"], 
        [218, 15, "BANGKALAN"], [219, 15, "SUMENEP"], [220, 15, "SITUBONDO"], 
        [221, 15, "SURABAYA"], [222, 15, "JEMBER"], [223, 15, "PAMEKASAN"], 
        [224, 15, "JOMBANG"], [225, 15, "PROBOLINGGO"], [226, 15, "BANYUWANGI"], 
        [227, 15, "PASURUAN"], [228, 15, "BOJONEGORO"], [229, 15, "BONDOWOSO"], 
        [230, 15, "MAGETAN"], [231, 15, "LUMAJANG"], [232, 15, "MALANG"], 
        [233, 15, "BLITAR"], [234, 15, "SIDOARJO"], [235, 15, "LAMONGAN"], 
        [236, 15, "PACITAN"], [237, 15, "TULUNGAGUNG"], [238, 15, "MOJOKERTO"], 
        [239, 15, "MADIUN"], [240, 15, "PONOROGO"], [241, 15, "NGAWI"], 
        [242, 15, "NGANJUK"], [243, 15, "TUBAN"], [244, 15, "TRENGGALEK"], 
        [245, 15, "BATU"],
        
        // Banten (province_id = 16)
        [246, 16, "TANGERANG"], [247, 16, "SERANG"], [248, 16, "PANDEGLANG"], 
        [249, 16, "LEBAK"], [250, 16, "TANGERANG SELATAN"], [251, 16, "CILEGON"],
        
        // Bali (province_id = 17)
        [252, 17, "KLUNGKUNG"], [253, 17, "KARANGASEM"], [254, 17, "BANGLI"], 
        [255, 17, "TABANAN"], [256, 17, "GIANYAR"], [257, 17, "BADUNG"], 
        [258, 17, "JEMBRANA"], [259, 17, "BULELENG"], [260, 17, "DENPASAR"],
        
        // Nusa Tenggara Barat (province_id = 18)
        [261, 18, "MATARAM"], [262, 18, "DOMPU"], [263, 18, "SUMBAWA BARAT"], 
        [264, 18, "SUMBAWA"], [265, 18, "LOMBOK TENGAH"], [266, 18, "LOMBOK TIMUR"], 
        [267, 18, "LOMBOK UTARA"], [268, 18, "LOMBOK BARAT"], [269, 18, "BIMA"],
        
        // Nusa Tenggara Timur (province_id = 19)
        [270, 19, "TIMOR TENGAH SELATAN"], [271, 19, "FLORES TIMUR"], [272, 19, "ALOR"], 
        [273, 19, "ENDE"], [274, 19, "NAGEKEO"], [275, 19, "KUPANG"], 
        [276, 19, "SIKKA"], [277, 19, "NGADA"], [278, 19, "TIMOR TENGAH UTARA"], 
        [279, 19, "BELU"], [280, 19, "LEMBATA"], [281, 19, "SUMBA BARAT DAYA"], 
        [282, 19, "SUMBA BARAT"], [283, 19, "SUMBA TENGAH"], [284, 19, "SUMBA TIMUR"], 
        [285, 19, "ROTE NDAO"], [286, 19, "MANGGARAI TIMUR"], [287, 19, "MANGGARAI"], 
        [288, 19, "SABU RAIJUA"], [289, 19, "MANGGARAI BARAT"],
        
        // Kalimantan Barat (province_id = 20)
        [290, 20, "LANDAK"], [291, 20, "KETAPANG"], [292, 20, "SINTANG"], 
        [293, 20, "KUBU RAYA"], [294, 20, "PONTIANAK"], [295, 20, "KAYONG UTARA"], 
        [296, 20, "BENGKAYANG"], [297, 20, "KAPUAS HULU"], [298, 20, "SAMBAS"], 
        [299, 20, "SINGKAWANG"], [300, 20, "SANGGAU"], [301, 20, "MELAWI"], 
        [302, 20, "SEKADAU"],
        
        // Kalimantan Tengah (province_id = 21)
        [303, 21, "KOTAWARINGIN TIMUR"], [304, 21, "SUKAMARA"], [305, 21, "KOTAWARINGIN BARAT"], 
        [306, 21, "BARITO TIMUR"], [307, 21, "KAPUAS"], [308, 21, "PULANG PISAU"], 
        [309, 21, "LAMANDAU"], [310, 21, "SERUYAN"], [311, 21, "KATINGAN"], 
        [312, 21, "BARITO SELATAN"], [313, 21, "MURUNG RAYA"], [314, 21, "BARITO UTARA"], 
        [315, 21, "GUNUNG MAS"], [316, 21, "PALANGKA RAYA"],
        
        // Kalimantan Selatan (province_id = 22)
        [317, 22, "TAPIN"], [318, 22, "BANJAR"], [319, 22, "HULU SUNGAI TENGAH"], 
        [320, 22, "TABALONG"], [321, 22, "HULU SUNGAI UTARA"], [322, 22, "BALANGAN"], 
        [323, 22, "TANAH BUMBU"], [324, 22, "BANJARMASIN"], [325, 22, "KOTABARU"], 
        [326, 22, "TANAH LAUT"], [327, 22, "HULU SUNGAI SELATAN"], [328, 22, "BARITO KUALA"], 
        [329, 22, "BANJARBARU"],
        
        // Kalimantan Timur (province_id = 23)
        [330, 23, "KUTAI BARAT"], [331, 23, "SAMARINDA"], [332, 23, "PASER"], 
        [333, 23, "KUTAI KARTANEGARA"], [334, 23, "BERAU"], [335, 23, "PENAJAM PASER UTARA"], 
        [336, 23, "BONTANG"], [337, 23, "KUTAI TIMUR"], [338, 23, "BALIKPAPAN"],
        
        // Kalimantan Utara (province_id = 24)
        [339, 24, "MALINAU"], [340, 24, "NUNUKAN"], [341, 24, "BULUNGAN (BULONGAN)"], 
        [342, 24, "TANA TIDUNG"], [343, 24, "TARAKAN"],
        
        // Sulawesi Utara (province_id = 25)
        [344, 25, "BOLAANG MONGONDOW (BOLMONG)"], [345, 25, "BOLAANG MONGONDOW SELATAN"], [346, 25, "MINAHASA SELATAN"], 
        [347, 25, "BITUNG"], [348, 25, "MINAHASA"], [349, 25, "KEPULAUAN SANGIHE"], 
        [350, 25, "MINAHASA UTARA"], [351, 25, "KEPULAUAN TALAUD"], [352, 25, "KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)"], 
        [353, 25, "MANADO"], [354, 25, "BOLAANG MONGONDOW UTARA"], [355, 25, "BOLAANG MONGONDOW TIMUR"], 
        [356, 25, "MINAHASA TENGGARA"], [357, 25, "KOTAMOBAGU"], [358, 25, "TOMOHON"],
        
        // Sulawesi Tengah (province_id = 26)
        [359, 26, "BANGGAI KEPULAUAN"], [360, 26, "TOLI-TOLI"], [361, 26, "PARIGI MOUTONG"], 
        [362, 26, "BUOL"], [363, 26, "DONGGALA"], [364, 26, "POSO"], 
        [365, 26, "MOROWALI"], [366, 26, "TOJO UNA-UNA"], [367, 26, "BANGGAI"], 
        [368, 26, "SIGI"], [369, 26, "PALU"],
        
        // Sulawesi Selatan (province_id = 27)
        [370, 27, "MAROS"], [371, 27, "WAJO"], [372, 27, "BONE"], 
        [373, 27, "SOPPENG"], [374, 27, "SIDENRENG RAPPANG / RAPANG"], [375, 27, "TAKALAR"], 
        [376, 27, "BARRU"], [377, 27, "LUWU TIMUR"], [378, 27, "SINJAI"], 
        [379, 27, "PANGKAJENE KEPULAUAN"], [380, 27, "PINRANG"], [381, 27, "JENEPONTO"], 
        [382, 27, "PALOPO"], [383, 27, "TORAJA UTARA"], [384, 27, "LUWU"], 
        [385, 27, "BULUKUMBA"], [386, 27, "MAKASSAR"], [387, 27, "SELAYAR (KEPULAUAN SELAYAR)"], 
        [388, 27, "TANA TORAJA"], [389, 27, "LUWU UTARA"], [390, 27, "BANTAENG"], 
        [391, 27, "GOWA"], [392, 27, "ENREKANG"], [393, 27, "PAREPARE"],
        
        // Sulawesi Tenggara (province_id = 28)
        [394, 28, "KOLAKA"], [395, 28, "MUNA"], [396, 28, "KONAWE SELATAN"], 
        [397, 28, "KENDARI"], [398, 28, "KONAWE"], [399, 28, "KONAWE UTARA"], 
        [400, 28, "KOLAKA UTARA"], [401, 28, "BUTON"], [402, 28, "BOMBANA"], 
        [403, 28, "WAKATOBI"], [404, 28, "BAU-BAU"], [405, 28, "BUTON UTARA"],
        
        // Gorontalo (province_id = 29)
        [406, 29, "GORONTALO UTARA"], [407, 29, "BONE BOLANGO"], [408, 29, "GORONTALO"], 
        [409, 29, "BOALEMO"], [410, 29, "POHUWATO"],
        
        // Sulawesi Barat (province_id = 30)
        [411, 30, "MAJENE"], [412, 30, "MAMUJU"], [413, 30, "MAMUJU UTARA"], 
        [414, 30, "POLEWALI MANDAR"], [415, 30, "MAMASA"],
        
        // Maluku (province_id = 31)
        [416, 31, "MALUKU TENGGARA BARAT"], [417, 31, "MALUKU TENGGARA"], [418, 31, "SERAM BAGIAN BARAT"], 
        [419, 31, "MALUKU TENGAH"], [420, 31, "SERAM BAGIAN TIMUR"], [421, 31, "MALUKU BARAT DAYA"], 
        [422, 31, "AMBON"], [423, 31, "BURU"], [424, 31, "BURU SELATAN"], 
        [425, 31, "KEPULAUAN ARU"], [426, 31, "TUAL"],
        
        // Maluku Utara (province_id = 32)
        [427, 32, "HALMAHERA BARAT"], [428, 32, "TIDORE KEPULAUAN"], [429, 32, "TERNATE"], 
        [430, 32, "PULAU MOROTAI"], [431, 32, "KEPULAUAN SULA"], [432, 32, "HALMAHERA SELATAN"], 
        [433, 32, "HALMAHERA TENGAH"], [434, 32, "HALMAHERA TIMUR"], [435, 32, "HALMAHERA UTARA"],
        
        // Papua (province_id = 33)
        [436, 33, "YALIMO"], [437, 33, "DOGIYAI"], [438, 33, "ASMAT"], 
        [439, 33, "JAYAPURA"], [440, 33, "PANIAI"], [441, 33, "MAPPI"], 
        [442, 33, "TOLIKARA"], [443, 33, "PUNCAK JAYA"], [444, 33, "PEGUNUNGAN BINTANG"], 
        [445, 33, "JAYAWIJAYA"], [446, 33, "LANNY JAYA"], [447, 33, "NDUGA"], 
        [448, 33, "BIAK NUMFOR"], [449, 33, "KEPULAUAN YAPEN (YAPEN WAROPEN)"], [450, 33, "PUNCAK"], 
        [451, 33, "INTAN JAYA"], [452, 33, "WAROPEN"], [453, 33, "NABIRE"], 
        [454, 33, "MIMIKA"], [455, 33, "BOVEN DIGOEL"], [456, 33, "YAHUKIMO"], 
        [457, 33, "SARMI"], [458, 33, "MERAUKE"], [459, 33, "DEIYAI (DELIYAI)"], 
        [460, 33, "KEEROM"], [461, 33, "SUPIORI"], [462, 33, "MAMBERAMO RAYA"], 
        [463, 33, "MAMBERAMO TENGAH"],
        
        // Papua Barat (province_id = 34)
        [464, 34, "RAJA AMPAT"], [465, 34, "MANOKWARI SELATAN"], [466, 34, "MANOKWARI"], 
        [467, 34, "KAIMANA"], [468, 34, "MAYBRAT"], [469, 34, "SORONG SELATAN"], 
        [470, 34, "FAKFAK"], [471, 34, "PEGUNUNGAN ARFAK"], [472, 34, "TAMBRAUW"], 
        [473, 34, "SORONG"], [474, 34, "TELUK WONDAMA"], [475, 34, "TELUK BINTUNI"]
    ];

    public function run(): void
    {
        foreach ($this->cities as $city) {
            \App\Models\City::create([
                "id" => $city[0],
                "province" => $city[1],
                "city" => $city[2]
            ]);
        }
    }
}