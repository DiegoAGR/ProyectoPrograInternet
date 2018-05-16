<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class artistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

for ($i = 1; $i <= 40; $i++) {
  DB::table('artistas')->insert([
    'nombre' => $faker->name,
    'pais' => $faker->country,
]);

}
    }
}
