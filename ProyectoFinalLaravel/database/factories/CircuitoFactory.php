<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CircuitoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'nombre' => $this->faker->state(),
                'vueltas' => $this->faker->randomDigit(),
                'KmsVuelta' =>  $this->faker->randomDigit(),
                'fotoCircuit' => 'MVC2.jpg' ,
                'Jornada' => $this->faker->randomDigit(),
        ];
    }
}
