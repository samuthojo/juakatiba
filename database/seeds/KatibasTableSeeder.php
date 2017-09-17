<?php

use Illuminate\Database\Seeder;
use App\Katiba;

class KatibasTableSeeder extends Seeder
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
              'date' => $faker->year(),
              'title' => $faker->sentence($faker->numberBetween(3, 5)),
              'description' => $faker->realText(200),
          ];
          Katiba::create($params);
      }
    }
}
