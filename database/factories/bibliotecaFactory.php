<?php

use Faker\Generator as Faker;

$factory->define(App\Biblioteca::class, function (Faker $faker) {
    return [

      'user_id' =>$faker->numberBetween($min = 1, $max = 50),
      'song_id' =>$faker->numberBetween($min = 1, $max = 100),

    ];
});
