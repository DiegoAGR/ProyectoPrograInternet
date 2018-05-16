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
      $this->call(comentariosSeeder::class);
      $this->call(artistasTableSeeder::class);
      $this->call(albumSeeder::class);
      $this->call(generosSeeder::class);
      $this->call(cancionesSeeder::class);
      $this->call(tablaUsuariosSeeder::class);
      $this->call(bibliotecaSeeder::class);
    }
}
