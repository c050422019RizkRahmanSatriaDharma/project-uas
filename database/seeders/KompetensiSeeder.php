<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kompetensi;
class KompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data yang ingin dimasukkan
        $kompetensi = ['TAV', 'TEI', 'TSM', 'TKJ'];

        // Memasukkan data ke dalam tabel kompetensi menggunakan create
        foreach ($kompetensi as $nama) {
            kompetensi::create([
                'kompetensi' => $nama,
            ]);
        }
    }
}