<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentsTableSeeder extends Seeder
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
              'type' => ($i%2 == 0) ? 'english' : 'swahili',
              'description' => $faker->realText(200),
              'context' => ($i%2 == 0) ? 'yaliyomo' : 'utangulizi',
              'katiba' => ($i%2 == 0) ? 'katiba77' : 'katibaMpya',
          ];
          Content::create($params);
      }
    }
}
