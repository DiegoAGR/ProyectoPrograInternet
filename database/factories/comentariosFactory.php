<?php

use Faker\Generator as Faker;

$factory->define(App\Comentario::class, function (Faker $faker) {

  $al = rand(1,2);
        if($al==1)
        {
          $tipo = "App\Song";
        }
        else {
          $tipo = "App\Album";
        }



    return [

      'texto' =>$faker->realText($faker->numberBetween(10,400)),
      'commentable_id' => $faker->numberBetween($min = 1, $max = 20),
      'commentable_type' => $tipo,

    ];
});
