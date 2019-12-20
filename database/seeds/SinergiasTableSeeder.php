<?php

use Illuminate\Database\Seeder;

class SinergiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Sinergia', 300)->states('randomized')->create();
        //  300 x Sinergias (likes, joins, performances)
    }
}
