<?php

use Illuminate\Database\Seeder;
use App\Midahalo;

class MidahalosTableSeeder extends Seeder
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
              'link' => $faker->url(),
              'date' => $faker->dateTime(),
              'description' => $faker->realText(200),
          ];
          Midahalo::create($params);
      }
    }
}
