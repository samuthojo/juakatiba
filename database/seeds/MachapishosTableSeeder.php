<?php

use Illuminate\Database\Seeder;
use App\Machapisho;

class MachapishosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for ($i=0; $i < 13; $i++) {
          $params = [
              'type' => 'swahili',
              'title' => $faker->sentence($faker->numberBetween(3, 5)),
              'author' => $faker->name(),
              'pdf' => 'katiba.pdf',
              'date' => $faker->year(),
          ];
          Machapisho::create($params);
      }
    }
}
