<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipo;
use App\Models\Circuito;

class RecorreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
    $listaEquipos = Equipo::select('id')->get()->transform(function($itm) {
        return $itm->id;
   });


   $listaCircuito = Circuito::select('id')->get()->transform(function($ctm) {
    return $ctm->id;
});


   return [
       'equipo_id' => $this->faker->randomElement($listaEquipos),
       'circuito_id' => $this->faker->randomElement($listaCircuito),
   ];
}
}
