<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JamRole;
use Faker\Generator as Faker;


$factory->state(JamRole::class, 'as-host', function(Faker $faker) {
    return [
        'role' => 'host'
    ];
});

$factory->state(JamRole::class, 'as-co_host', function(Faker $faker) {
    return [
        'role' => 'co_host'
    ];
});

$factory->state(JamRole::class, 'as-promoter', function(Faker $faker) {
    return [
        'role' => 'promoter'
    ];
});


$factory->define(JamRole::class, function (Faker $faker) {
    return [
        //
        'jam_id' =>  $faker->numberBetween(1,50),
        'user_id' =>  $faker->numberBetween(3,253),
    ];
});
