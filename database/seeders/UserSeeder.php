<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define algunos datos de ejemplo
        $usuarios = [
            [
                'username' => 'juan123',
                'password' => bcrypt('secreto'),
                'name' => 'Juan',
                'last_name' => 'Pérez',
                'address' => 'Av. Siempre Viva 123',
                'cellphone' => '555-1234',
                'type' => 'Admin',
                'empresa_id' => 1
            ],
            [
                'username' => 'ana456',
                'password' => bcrypt('123456'),
                'name' => 'Ana',
                'last_name' => 'García',
                'address' => 'Calle Falsa 123',
                'cellphone' => '555-5678',
                'type' => 'User',
                'empresa_id' => null
            ],
            // Agrega más usuarios aquí
        ];

        // Inserta los datos en la tabla de usuarios
        DB::table('usuarios')->insert($usuarios);

    }
}
