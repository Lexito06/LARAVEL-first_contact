<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Este será un seeder para crear registros en la tabla users
        $user = new User();

        $user->name = 'Dalian Administrador';
        $user->email = 'dalianadmin@gmail.com';
        $user->password = bcrypt('12345678');
        $user->id_rol = 1; // 1 = Administrador

        $user->save();

        $user = new User();

        $user->name = 'Dalian Desarrolador';
        $user->email = 'daliandes@gmail.com';
        $user->password = bcrypt('12345678');
        $user->id_rol = 2; // 2 = Desarrollador

        $user->save();


        User::factory(10)->create();
    }
}
