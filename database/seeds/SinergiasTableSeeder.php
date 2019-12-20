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
        //  Run factory function in 3 states (jam_role = (null, promoter, co_host)
        factory('App\Sinergia', 20)->create();
        factory('App\Sinergia', 15)->states('promotion')->create();
        factory('App\Sinergia', 5)->states('co-hosting')->create();
    }
}
