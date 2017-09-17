<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(HabarisTableSeeder::class);
        $this->call(HistoriesTableSeeder::class);
        $this->call(Katiba77sTableSeeder::class);
        $this->call(KatibasTableSeeder::class);
        $this->call(MachapishosTableSeeder::class);
        $this->call(MidahalosTableSeeder::class);
    }
}
