<?php

namespace Database\Seeders;

use App\Models\Circuito;
use App\Models\Puntuacion;
use Illuminate\Database\Seeder;
use App\Models\Equipo;
use App\Models\Participante;
use App\Models\Recorre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      //  Equipo::factory(10)->create();
     //   Participante::factory(3)->create();
     //   Puntuacion::factory(20)->create();
      //  Circuito::factory(10)->create();
      //  Recorre::factory(40)->create();

        $this->call(ProductsTableSeeder::class);
      //  $this->call(UserSeeder::class);
    }
}
