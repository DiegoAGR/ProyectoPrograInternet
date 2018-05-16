<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [

      'nombre' =>$faker->word,
      'anio' =>$faker->year($max = 'now'),
      'artista_id' =>$faker->numberBetween($min = 1, $max = 40)
    ];
});
