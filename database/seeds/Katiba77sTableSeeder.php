<?php

use Illuminate\Database\Seeder;
use App\Katiba77;

class Katiba77sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for ($i=0; $i < 506; $i++) {
          $params = [
              'ibara' => $faker->numberBetween(0, 600),
              'type' => 'swahili',
              'description' => $faker->realText(200),
              'katiba' => ($i%2 == 0) ? 'katiba77' : 'katibampya',
          ];
          Katiba77::create($params);
      }
    }
}
