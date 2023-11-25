<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->username(),
            'peso' => $this->faker->randomDigit(),
            'marca' =>  $this->faker->state(),
            
        ];
    }
}
