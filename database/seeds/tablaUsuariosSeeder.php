<?php

use Illuminate\Database\Seeder;

class tablaUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $user = factory(App\User::class, 50)->create();


      /*
      DB::table('usuario')->insert([
         'nombre' => str_random(10),
         'nickname' => str_random(10) ,
         'correoElectronico' => str_random(10).'@gmail.com',
         'contrasena' => bcrypt('secret'),
     ]);*/
    }
}
