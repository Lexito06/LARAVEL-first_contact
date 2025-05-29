<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Juego::factory()->create(['id_categoria' => 1, 'imagen' => 'juego1.jpg']);
        Juego::factory()->create(['id_categoria' => 2, 'imagen' => 'juego2.jpg']);
        Juego::factory()->create(['id_categoria' => 3, 'imagen' => 'juego3.jpg']);
        Juego::factory()->create(['id_categoria' => 4, 'imagen' => 'juego4.jpg']);
        Juego::factory()->create(['id_categoria' => 5, 'imagen' => 'juego5.jpg']);
        Juego::factory()->create(['id_categoria' => 6, 'imagen' => 'juego6.jpg']);
        Juego::factory()->create(['id_categoria' => 7, 'imagen' => 'juego7.jpg']);
        Juego::factory()->create(['id_categoria' => 8, 'imagen' => 'juego8.jpg']);
        Juego::factory()->create(['id_categoria' => 9, 'imagen' => 'juego9.jpg']);
    }
}
