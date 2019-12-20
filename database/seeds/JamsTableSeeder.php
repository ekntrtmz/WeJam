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
        factory('App\Jam', 100)->states('open-mic')->create();
        //  100 x Open Mics
    }
}
