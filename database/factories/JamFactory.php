<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jam;
use Faker\Generator as Faker;

$factory->state(App\Jam::class, 'jam-session', function(Faker $faker) {

    return [
        'type' => 'jam_session',
        'mode' => $faker->randomElement(array('public', 'public', 'public', 'private')),
        //'user_id' => factory('App\User')->create()->id,
    ];
});

$factory->state(App\Jam::class, 'open-mic', function() {
    return [
        'type' => 'open_mic',
        'user_id' => 0,
        //  Open Mics owned by admin or another staff member
    ];
});

$factory->define(Jam::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->unique()->sentence(5),
        'descr' => $faker->text(),
        'city_id' => $faker->numberBetween(0,7),
        'user_id' => factory('App\User')->create()->id,

    ];
});
