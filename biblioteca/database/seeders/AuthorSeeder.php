<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'name'        => 'Gabriel Garcia Marquez',
            'nationality' => 'Colombiano',
            'birthdate'   => '1927-03-06'
        ]);

        Author::create([
            'name'        => 'Isabel Allende',
            'nationality' => 'Chilena',
            'birthdate'   => '1942-08-02'
        ]);

        Author::create([
            'name'        => 'Mario Vargas Llosa',
            'nationality' => 'Peruano',
            'birthdate'   => '1936-03-28'
        ]);
    }
}