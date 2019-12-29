<?php

use Illuminate\Database\Seeder;

class YamenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Yaman', 300)->create();
        //  Create 300 x Likes
    }
}
