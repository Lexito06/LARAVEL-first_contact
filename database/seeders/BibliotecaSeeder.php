<?php

namespace Database\Seeders;

use App\Models\Biblioteca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biblioteca = new Biblioteca();
        $biblioteca->id_usuario = 1;
        $biblioteca->id_juego = 1;
        $biblioteca->save();

        $biblioteca = new Biblioteca();
        $biblioteca->id_usuario = 1;
        $biblioteca->id_juego = 2;
        $biblioteca->save();

        $biblioteca = new Biblioteca();
        $biblioteca->id_usuario = 1;
        $biblioteca->id_juego = 3;
        $biblioteca->save();

        $biblioteca = new Biblioteca();
        $biblioteca->id_usuario = 1;
        $biblioteca->id_juego = 4;
        $biblioteca->save();

        $biblioteca = new Biblioteca();
        $biblioteca->id_usuario = 1;
        $biblioteca->id_juego = 5;
        $biblioteca->save();

        $biblioteca = new Biblioteca();
        $biblioteca->id_usuario = 1;
        $biblioteca->id_juego = 6;
        $biblioteca->save();
    }
}
