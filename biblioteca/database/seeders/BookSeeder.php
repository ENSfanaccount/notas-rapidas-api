<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $garcia  = Author::where('name', 'LIKE', '%Garcia%')->first();
        $allende = Author::where('name', 'LIKE', '%Allende%')->first();
        $vargas  = Author::where('name', 'LIKE', '%Vargas%')->first();

        Book::create([
            'title'          => 'Cien Anos de Soledad',
            'genre'          => 'Realismo Magico',
            'published_year' => 1967,
            'price'          => 299.00,
            'author_id'      => $garcia->id
        ]);

        Book::create([
            'title'          => 'El Amor en los Tiempos del Colera',
            'genre'          => 'Romance',
            'published_year' => 1985,
            'price'          => 249.00,
            'author_id'      => $garcia->id
        ]);

        Book::create([
            'title'          => 'La Casa de los Espiritus',
            'genre'          => 'Realismo Magico',
            'published_year' => 1982,
            'price'          => 279.00,
            'author_id'      => $allende->id
        ]);

        Book::create([
            'title'          => 'La Ciudad y los Perros',
            'genre'          => 'Novela',
            'published_year' => 1963,
            'price'          => 199.00,
            'author_id'      => $vargas->id
        ]);
    }
}