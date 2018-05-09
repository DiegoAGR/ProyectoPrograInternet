<?php

use Illuminate\Database\Seeder;

class albumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $album = factory(App\Album::class, 30)->create();

    }
}
