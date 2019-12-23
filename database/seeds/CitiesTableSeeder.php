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
                'slug' => 'barcelona',
                'short' => 'bcn',
                'country_code' => 'ES'
            ],
            [
                'name' => 'Paris',
                'slug' => 'paris',
                'short' => 'par',
                'country_code' => 'FR'
            ],
            [
                'name' => 'London',
                'slug' => 'london',
                'short' => 'ldn',
                'country_code' => 'GB'
            ],
            [
                'name' => 'Roma',
                'slug' => 'rome',
                'short' => 'rme',
                'country_code' => 'IT'
            ],
            [
                'name' => 'Istanbul',
                'slug' => 'istanbul',
                'short' => 'ist',
                'country_code' => 'TR'
            ],
            [
                'name' => 'Amsterdam',
                'slug' => 'amsterdam',
                'short' => 'ams',
                'country_code' => 'NL'
            ],
            [
                'name' => 'Tel Aviv',
                'slug' => 'tel-aviv',
                'short' => 'tlv',
                'country_code' => 'IS'
            ]
        ]);


    }
}
