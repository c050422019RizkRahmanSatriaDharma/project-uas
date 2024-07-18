<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(30)->create();

        User::create([
            'no_pendaftaran' => '01',
            'nama_lengkap' => 'Rizky Rahman Satria Dharma',
            'kompetensis' => 'TKJ',
            'hobby' => 'gaming',
            'profil' => 'penyuka sim-racing',
            'email' => 'c050422019@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('hikaruimsick'),
            'roles' => 'mahasiswa',
        ]);
    }
}
