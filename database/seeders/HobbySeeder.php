<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data yang ingin dimasukkan
        $hobbys = ['membaca', 'olahraga', 'koding', 'gaming'];

        // Memasukkan data ke dalam tabel kompetensi menggunakan create
        foreach ($hobbys as $hobi) {
            Hobby::create([
                'hobby' => $hobi,
            ]);
        }
    }
}
