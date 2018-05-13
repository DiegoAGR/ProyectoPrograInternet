<?php

use Faker\Generator as Faker;

$factory->define(App\Song::class, function (Faker $faker) {
    return [

      'titulo' =>$faker->word,
      'artista' =>$faker->firstName,
      'album_id' =>$faker->numberBetween($min = 1, $max = 30),
      'genero_id' => $faker->numberBetween($min = 1, $max = 120) ,
      'duracion' => $faker->time($format = 'H:m:s', $max = '0:15:59'),

    ];
});
