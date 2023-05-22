<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Productos;
use App\Models\Casillero;


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
                'email' => 'admin@spazio.bo',
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
                'nombre' => 'Yovan Ramón Yaune Enovore',
                'imagenPerfil' => 'img',
                'direccion' => 'Olñaeta Final',
                'sexo' => 'masculino',
                'telefono' => '+59173467157',
                'celular' => '+59165659',
                'email' => 'usuarios99@agymsa.bo',
                'nvisitas' => '665',
                'puntosAcumulados' => '213',
                'ultimaVisita' => '2023-10-05',
                'fechaNacimiento' => '1999-12-04',
            ]
        ]);

        // Fake users
        Cliente::factory()->times(30)->create();


        \App\Models\Productos::insert([
            [
                       'Nombre' => 'Guantes de pesas',
                       'Precio' => '3.50',
                       'Descripcion' => 'Guantes de 3 tamaños para distintos gustos.',
                       'Estado' => '0',
                       'imagen' => 'img',
                       'min' => '200',
                       'max' => '20000',
                       'stock' => '155.5',
                   ]
               ]);

               // Fake Productos
               Productos::factory()->times(20)->create();

               \App\Models\Casillero::insert([
                [
                           'disponible' => '1',
                       ]
                   ]);
               // Generar 10 casilleros de ejemplo
        Casillero::factory()->times(49)->create();
    }
}
