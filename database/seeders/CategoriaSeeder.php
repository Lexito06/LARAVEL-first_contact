<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = new Categoria();
        $categoria->nombre = 'Acción';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Aventura';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Deportes';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Carreras';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Lucha';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Simulación';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Estrategia';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Puzzle';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Plataformas';
        $categoria->save();

    }
}
