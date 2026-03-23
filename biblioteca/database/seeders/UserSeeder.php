<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin Biblioteca',
            'email'    => 'admin@biblioteca.com',
            'password' => bcrypt('Admin@2024')
        ]);

        User::create([
            'name'     => 'Juan Perez',
            'email'    => 'juan@biblioteca.com',
            'password' => bcrypt('User@2024')
        ]);

        User::create([
            'name'     => 'Maria Lopez',
            'email'    => 'maria@biblioteca.com',
            'password' => bcrypt('User@2024')
        ]);
    }
}