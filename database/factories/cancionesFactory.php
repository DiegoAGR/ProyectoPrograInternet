<?php

use Faker\Generator as Faker;

$factory->define(App\Cancion::class, function (Faker $faker) {
    return [

      'titulo' =>$faker->word,
      'artista' =>$faker->firstName,
      'album' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
      'genero' => $faker->state,
      'duracion' => $faker->time($format = 'H:i:s', $max = '0:15:59'),

    ];
});
