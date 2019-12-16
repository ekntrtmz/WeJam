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
                'title' => 'Barcelona',
                'abrv' => 'bcn'
            ],
            [
                'title' => 'Paris',
                'abrv' => 'par'
            ],
            [
                'title' => 'London',
                'abrv' => 'ldn'
            ],
            [
                'title' => 'Roma',
                'abrv' => 'rme'
            ],
            [
                'title' => 'Istanbul',
                'abrv' => 'ist'
            ],
            [
                'title' => 'Amsterdam',
                'abrv' => 'ams'
            ],
            [
                'title' => 'Tel Aviv',
                'abrv' => 'tlv'
            ]
        ]);


    }
}
