<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Este será un seeder para crear registros en la tabla users
        $rol = new Rol();

        $rol->nombre = 'Administrador';

        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Desarrollador';

        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Usuario';

        $rol->save();

    }
}
