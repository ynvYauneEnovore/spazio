<?php

namespace Database\Factories;

use App\Models\Casillero;
use Illuminate\Database\Eloquent\Factories\Factory;

class CasilleroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Casillero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'disponible' => $this->faker->randomElement([1]), // Puedes ajustar los valores según tus necesidades
        ];
    }
}
