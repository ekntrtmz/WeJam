<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            [
                'name' => 'Barcelona',
                'short' => 'bcn',
                'country_code' => 'ES'
            ],
            [
                'name' => 'Paris',
                'short' => 'par',
                'country_code' => 'FR'
            ],
            [
                'name' => 'London',
                'short' => 'ldn',
                'country_code' => 'GB'
            ],
            [
                'name' => 'Roma',
                'short' => 'rme',
                'country_code' => 'IT'
            ],
            [
                'name' => 'Istanbul',
                'short' => 'ist',
                'country_code' => 'TR'
            ],
            [
                'name' => 'Amsterdam',
                'short' => 'ams',
                'country_code' => 'NL'
            ],
            [
                'name' => 'Tel Aviv',
                'short' => 'tlv',
                'country_code' => 'IS'
            ]
        ]);


    }
}
