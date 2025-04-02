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

        $user->name = 'Dalian Stetcu';
        $user->email = 'dalianstetcu@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();


        User::factory(10)->create();
    }
}
