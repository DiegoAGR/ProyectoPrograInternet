<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $this->call(tablaUsuariosSeeder::class);
      $this->call(cancionesSeeder::class);
        // $this->call(tablaUsuariosSeeder::class);
    }
}
