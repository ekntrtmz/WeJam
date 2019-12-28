<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jammer;
use Faker\Generator as Faker;

$factory->state(Jammer::class, 'host', function(Faker $faker) {
    return [
        'jammer_type' => 'host'
    ];
});

$factory->state(Jammer::class, 'performer', function(Faker $faker) {
    return [
        'jammer_type' => 'performer'
    ];
});

$factory->define(Jammer::class, function (Faker $faker) {
    return [
        //
        'jam_id' =>  $faker->numberBetween(1,50),
        'user_id' =>  $faker->numberBetween(3,253),

    ];
});
