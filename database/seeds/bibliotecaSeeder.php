<?php

use Illuminate\Database\Seeder;

class bibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $biblioteca = factory(App\Biblioteca::class, 150)->create();

    }
}
