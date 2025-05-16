<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuestionDream;

class QuestionDreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // K001 - Kecerdasan Linguistic-Verbal (1)
            ["saya sangat suka bercerita kepada orang lain", 1],
            ["saya mudah mengingat hal-hal kecil", 1],
            ["Permainan kata-kata membuat saya bersemangat", 1],
            ["Membaca buku adalah hobi harian saya", 1],
            ["saya pandai berbicara di depan umum", 1],
            ["saya lebih menyukai pelajaran bahasa daripada matematika", 1],
            ["saya senang menulis dan mendiskusikan ide yang muncul", 1],
            ["saya memiliki kosakata yang sangat banyak", 1],            
            ["saya sangat menikmati menulis karangan dan tulisan lainnya", 1],
            ["saya lebih memilih menjadi penulis skrip daripada pembicara saat presentasi", 1],
            ["saya membuat orang lain paham yang saya maksud dengan banyak cara", 1],
            ["Debat dan diskusi membuat saya bersemangat berpikir", 1],
            
            // K002 - Kecerdasan Logika-Matematik (2)
            ["Matematika adalah pelajaran favorit saya", 2],
            ["Teka-teki angka membuat saya penasaran", 2],
            ["saya senang mengerjakan soal hitungan dan menemukan jawabannya", 2],
            ["saya lebih suka mengurutkan logika saat mengingat sesuatu", 2],
            ["saya sering penasaran bagaimana benda-benda bekerja", 2],
            ["saya sangat menikmati bermain dengan angka dan komputer", 2],
            ["saya pandai bermain catur, sudoku, dan monopoli", 2],
            ["Menghitung di luar kepala adalah hal mudah bagi saya", 2],
            ["saya suka membongkar barang rusak untuk memahami cara kerjanya", 2],
            ["saya lebih suka berpikir sebelum bertindak", 2],

            ["Film dan buku detektif adalah favorit saya", 2],
            
            ["saya senang melakukan eksperimen kecil di rumah", 2],
            
            // K003 - Kecerdasan Spasial-Visual (3)
            ["saya lebih percaya pada peta daripada tulisan saat mencari tempat", 3],
            ["Puzzle gambar dan labirin sangat cocok untuk saya", 3],
            ["Fotografi adalah salah satu kegiatan yang saya sukai", 3],
            ["saya senang menggambar dan membuat hal-hal kreatif", 3],
            ["saya menemukan geografi lebih menarik daripada matematika", 3],
            ["saya sering mencoret-coret kertas saat melamun", 3],
            ["Gambar lebih menarik daripada teks saat saya membaca majalah", 3],
            ["saya pandai bermain lego dan membangun bentuk 3D", 3],
            ["saya lebih mudah memahami sesuatu melalui gambar daripada teks", 3],
            ["Seni rupa adalah pelajaran yang selalu saya nantikan", 3],
            ["Mengatur ulang ruang kamar adalah kegiatan favorit saya", 3],

            ["saya dapat membayangkan bentuk benda dari berbagai sisi dengan mudah", 3],
            
            // K004 - Kecerdasan Ritmik-Musik (4)
            ["Mendengarkan musik adalah rutinitas harian saya", 4],
            ["saya sering menyanyi kecil saat melakukan aktivitas", 4],
            ["Suara saya dianggap bagus oleh teman-teman", 4],
            ["saya bisa memainkan alat musik dengan cukup baik", 4],
            ["Belajar sambil mendengarkan musik adalah keharusan bagi saya", 4],
            ["saya suka membuat nada sendiri untuk mengingat sesuatu", 4],
            ["saya menikmati semua jenis musik", 4],
            ["saya bisa menyanyikan lagu yang baru didengar beberapa kali", 4],
            ["saya sering mengetuk-ngetuk meja membuat irama saat berpikir", 4],
            ["Musik membuat saya semangat melakukan apapun", 4],
            ["saya langsung menyadari ketika ada nada yang fals", 4],
            ["Berjalan sambil bernyanyi adalah kebiasaan saya", 4],
            
            // K005 - Kecerdasan Kinestetik (5)
            ["Olahraga membuat saya bahagia", 5],
            ["saya senang membuat prakarya dan menjahit", 5],

            ["saya perlu menyentuh benda baru untuk memahaminya", 5],

            ["saya tidak bisa duduk diam terlalu lama", 5],
            ["saya menggunakan gerakan tangan saat berbicara", 5],
            
            ["saya pernah meraih prestasi di bidang olahraga", 5],
            
            ["Kegiatan ekstrim dan menegangkan menarik bagi saya", 5],
            ["saya pandai dalam pekerjaan tangan seperti membuat barang", 5],
            ["saya suka membongkar lalu memasang kembali barang rusak", 5],
            
            ["saya perlu mencoba sendiri untuk memahami sesuatu", 5],
            
            ["Ide-ide saya sering muncul saat berjalan dan berolahraga", 5],
            ["saya rutin mengikuti kegiatan fisik dan olahraga", 5],
            
            // K006 - Kecerdasan Interpersonal (6)
            ["saya mudah berteman dengan orang baru", 6],
            ["Bergabung dalam organisasi dan nongkrong bersama sangat menyenangkan bagi saya", 6],
            ["saya memiliki beberapa teman dekat", 6],
            ["saya senang mengajarkan hal yang saya ketahui kepada orang lain", 6],
            ["saya lebih menyukai mengerjakan tugas kelompok", 6],
            ["Orang sering meminta saran dan pendapat saya", 6],
            ["saya suka meminta teman menguji saya saat belajar", 6],
            ["saya suka mengajak teman mendukung argumen saat debat", 6],
            ["saya aktif dalam acara sosial dan organisasi", 6],
            ["saya sering ditunjuk sebagai pemimpin kelompok", 6],
            ["saya lebih memilih meminta bantuan orang lain saat ada masalah", 6],
            
            ["Menghabiskan waktu dengan teman lebih menyenangkan daripada sendirian", 6],
            
            // K007 - Kecerdasan Intrapersonal (7)
            ["saya lebih suka melakukan sesuatu sendiri", 7],
            ["saya memiliki buku harian dan catatan pribadi", 7],
            
            ["saya bisa belajar dari pengalaman masa lalu", 7],
            
            ["Keramaian bukan tempat favorit saya", 7],
            ["saya sangat memahami kelebihan dan kekurangan diri sendiri", 7],
            ["saya mandiri dan tidak mudah terpengaruh", 7],
            
            ["saya meresapi situasi saat mengingat sesuatu", 7],
            
            ["Akhir pekan sendirian lebih menyenangkan bagi saya", 7],
            ["saya berpikir dulu sebelum memperbaiki barang rusak", 7],
            ["saya merasa sudah cukup mandiri", 7],
            ["saya memiliki tujuan hidup yang jelas", 7],
            
            ["saya memiliki hobi yang jarang diketahui orang", 7],
            
            // K008 - Kecerdasan Naturalis (8)
            ["saya sangat peka terhadap lingkungan sekitar", 8],
            ["Berjalan di taman sambil melihat tanaman menenangkan saya", 8],
            ["Berkebun adalah kegiatan yang menyenangkan", 8],
            ["saya memiliki minat besar terhadap alam dan lingkungan", 8],
            ["saya ingin tinggal di dekat alam ketika dewasa", 8],
            ["saya sangat menikmati hiking di alam terbuka", 8],
            
            ["saya bisa menyebutkan nama tumbuhan dan hewan di sekitar", 8],
            
            ["saya sering membandingkan informasi saat berdebat", 8],
            
            ["saya melihat sekitar untuk mencari cara memperbaiki barang rusak", 8],
            
            ["Biologi dan ilmu alam adalah bidang favorit saya", 8],
            
            ["saya bisa menjelaskan perbedaan jenis tumbuhan dan hewan dengan jelas", 8],
            
            ["saya memiliki hewan peliharaan dan suka berkebun", 8],
            
            // K009 - Kecerdasan Eksistensial (9)
            ["saya tertarik dengan makna kehidupan", 9],
            ["Nilai agama sangat penting bagi saya", 9],
            ["saya menikmati karya seni", 9],
            ["Meditasi dan relaksasi penting bagi saya", 9],
            ["saya suka mengunjungi tempat wisata alam", 9],
            ["saya sangat menikmati membaca buku filsafat", 9],
            ["saya lebih mudah belajar hal baru ketika memahami maknanya", 9],
            ["saya penasaran dengan kehidupan di luar angkasa", 9],
            
            ["Sejarah dan budaya kuno membuat saya tercerahkan", 9],
            
            ["saya senang membaca buku sejarah", 9],
            
            ["saya bisa menjelaskan budaya kuno dengan baik", 9],
            ["Belajar sejarah meningkatkan ketertarikan saya pada masa lalu", 9],
        ];

        $id = 1;
        foreach ($questions as $question) {
            QuestionDream::create([
                "id" => $id++,
                "question_dream" => $question[0],
                "intelligence_type" => $question[1],
            ]);
        }
    }
}