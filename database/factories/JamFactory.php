<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jam;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory
    ->state(App\Jam::class, 'jam-session', function(Faker $faker) {

        return [
            'mode' => $faker->randomElement(
                array('public', 'public', 'public', 'private')
                //  Relative random 1/4 chance of public mode
            ),
            //  Add jam session related dummy data here
        ];

});

$factory->state(App\Jam::class, 'open-mic', function() {
    return [
        'type' => 'open_mic',
        'user_id' => 1,
        //  Add open mic related dummy data here
    ];
});

$factory->define(Jam::class, function (Faker $faker) {

    $title = $faker->unique()->words(3, true);
    $slug =  Str::slug( $title, '-');;

    return [
        //
        'title' => $title,
        'slug' => $slug,
        'descr' => $faker->text(),
        'city_id' => $faker->numberBetween(0,7),
        //'user_id' => factory('App\User')->create()->id,

    ];
});
