<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->word,
            'Precio' => '3.50',
            'Descripcion' => $this->faker->sentence,
            'Estado' => $this->faker->numberBetween(0, 1),
            'imagen' => 'img',
            'min' => $this->faker->randomNumber(3),
            'max' => $this->faker->randomNumber(5),
            'stock' => $this->faker->randomFloat(2, 0, 200),
        ];
    }
}
