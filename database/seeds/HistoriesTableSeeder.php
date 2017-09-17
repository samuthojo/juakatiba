<?php

use Illuminate\Database\Seeder;
use App\History;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for ($i=0; $i < 12; $i++) {
          $params = [
              'date' => $faker->year(),
              'title' => $faker->sentence($faker->numberBetween(3, 5)),
              'description' => $faker->paragraph(),
          ];
          History::create($params);
      }
    }
}
