<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subdistrict;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SubdistrictFromCsvSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Subdistrict::truncate();
        
        $csvPath = storage_path('app/csv/subdistricts.csv');
        
        if (!File::exists($csvPath)) {
            throw new \Exception("File CSV tidak ditemukan di: {$csvPath}");
        }

        $file = fopen($csvPath, 'r');
        
        // Baca header dan tentukan delimiter
        $header = fgetcsv($file, 0, ';'); // Gunakan titik koma sebagai delimiter
        
        // Validasi header
        if ($header === false || count($header) < 3) {
            fclose($file);
            throw new \Exception("Format header CSV tidak valid. Pastikan format: id;subdistrict;city");
        }

        $data = [];
        $now = now();
        $lineNumber = 1;
        
        try {
            while (($row = fgetcsv($file, 0, ';')) !== false) { // Gunakan titik koma
                $lineNumber++;
                
                // Skip baris kosong
                if ($row === null || count($row) < 3) {
                    continue;
                }
                
                $data[] = [
                    'id' => (int) trim($row[0]),
                    'subdistrict' => trim($row[1]),
                    'city' => (int) trim($row[2]),
                    'created_at' => $now,
                    'updated_at' => $now
                ];
                
                // Insert per 500 record
                if (count($data) >= 500) {
                    Subdistrict::insert($data);
                    $data = [];
                }
            }
            
            if (!empty($data)) {
                Subdistrict::insert($data);
            }
            
        } catch (\Exception $e) {
            fclose($file);
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
            throw new \Exception("Error pada baris {$lineNumber}: " . $e->getMessage());
        }
        
        fclose($file);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        $this->command->info("Berhasil mengimpor ".($lineNumber-1)." subdistricts");
    }
}