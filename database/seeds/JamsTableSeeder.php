<?php

use Illuminate\Database\Seeder;

class JamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Jam', 35)->create();
        factory('App\Jam', 70)->states('open-mic')->create();
    }
}
