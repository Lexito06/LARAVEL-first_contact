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
        Juego::factory()->create(['id_categoria' => 1]);
        Juego::factory()->create(['id_categoria' => 2]);
        Juego::factory()->create(['id_categoria' => 3]);
        Juego::factory()->create(['id_categoria' => 4]);
        Juego::factory()->create(['id_categoria' => 5]);
        Juego::factory()->create(['id_categoria' => 6]);
        Juego::factory()->create(['id_categoria' => 7]);
        Juego::factory()->create(['id_categoria' => 8]);
        Juego::factory()->create(['id_categoria' => 9]);
    }
}
