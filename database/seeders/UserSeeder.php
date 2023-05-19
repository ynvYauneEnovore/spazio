<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Productos;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials
        \App\Models\User::insert([
            [
                'name' => 'Left4code',
                'email' => 'admin@agymsa.bo',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'gender' => 'male',
                'active' => 1,
                'remember_token' => Str::random(0)
            ]
        ]);

        // Fake users
        User::factory()->times(0)->create();

        \App\Models\Cliente::insert([
            [
                'codigoCliente' => '21321',
                'nombre' => 'ynvols',
                'imagenPerfil' => 'img',
                'direccion' => 'Olñaeta Final',
                'sexo' => 'masculino',
                'telefono' => '+59173467157',
                'celular' => '+59165659',
                'email' => 'usuarios99@agymsa.bo',
                'nvisitas' => '5',
                'puntosAcumulados' => '213',
                'ultimaVisita' => '2023-10-05',
                'fechaNacimiento' => '1999-12-04',
            ]
        ]);

        // Fake users
        Cliente::factory()->times(10)->create();


        \App\Models\Productos::insert([
            [
                       'Nombre' => 'Agua',
                       'Precio' => '3.50',
                       'Descripcion' => 'Botella de agua mediana',
                       'Estado' => '10',
                       'imagen' => 'img',
                       'min' => '200',
                       'max' => '20000',
                       'stock' => '155.5',
                   ]
               ]);

               // Fake Productos
               Productos::factory()->times(60)->create();
    }
}
