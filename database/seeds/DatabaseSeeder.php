<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(JamsTableSeeder::class);
        //$this->call(SinergiasTableSeeder::class);
        $this->call(YamenTableSeeder::class);
        //$this->call(JammersTableSeeder::class);
        //$this->call(JamRolesTableSeeder::class);
    }
}
