<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [

      'nombre' =>$faker->word,
      'anio' =>$faker->year($max = 'now'),

    ];
});
