<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Yaman;
use Faker\Generator as Faker;

$factory->define(Yaman::class, function (Faker $faker) {
    return [
        //
        'jam_id' =>  $faker->numberBetween(1,50),
        'user_id' =>  $faker->numberBetween(3,253),
    ];
});
