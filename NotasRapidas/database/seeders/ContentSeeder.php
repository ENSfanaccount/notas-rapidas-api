<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $notes = [
            'Comprar leche y pan en el super',
            'Llamar al doctor el jueves a las 3pm',
            'Entregar reporte de Laravel antes del viernes',
            'Revisar correos pendientes del trabajo',
            'Estudiar para el examen de base de datos',
        ];

        foreach ($notes as $content) {
            Note::create(['note_content' => $content]);
        }
    }
}