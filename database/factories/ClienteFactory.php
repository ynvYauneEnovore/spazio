<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nit' => $this->faker->numerify('#########'),
            'codigoCliente' => $this->faker->unique()->randomNumber(5),
            'nombre' => $this->faker->name,
            'imagenPerfil' => 'img',
            'direccion' => $this->faker->address,
            'sexo' => $this->faker->randomElement(['male', 'female']),
            'telefono' => $this->faker->phoneNumber,
            'celular' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'nvisitas' => $this->faker->numberBetween(0, 10),
            'puntosAcumulados' => $this->faker->numberBetween(0, 100),
            'ultimaVisita' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'fechaNacimiento' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
        ];
    }
}
