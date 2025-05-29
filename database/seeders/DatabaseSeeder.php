<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Aquí se llama a todos los seeders que se hayan creado
        $this->call([
            RolSeeder::class,
            UserSeeder::class,
            CategoriaSeeder::class,
            JuegoSeeder::class,
            BibliotecaSeeder::class,
        ]);

    }
}
