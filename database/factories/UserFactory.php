<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Ganti 'password' dengan password yang Anda inginkan
            'no_pendaftaran' => $this->faker->unique()->randomNumber(5),
            'kompetensis' => "a",
            'hobby' => 'Gaming',
            'profil' => $this->faker->paragraph,
        ];
    }
}
