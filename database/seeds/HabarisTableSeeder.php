<?php

use Illuminate\Database\Seeder;
use App\Habari;

class HabarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for ($i=0; $i < 11; $i++) {
          $params = [
              'type' => 'swahili',
              'title' => $faker->sentence($faker->numberBetween(3, 5)),
              'description' => $faker->realText(200),
              'link' => $faker->url(),
              'image' => "coat.png",
          ];
          Habari::create($params);
      }
    }
}
