<?php

use Illuminate\Database\Seeder;

class comentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $comentarios = factory(App\Comentario::class, 100)->create();

    }
}
