<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sinergia;
use Faker\Generator as Faker;

$factory->state(Sinergia::class, 'co-hosting', function(Faker $faker) {
    return [
        'jam_role' => 'co_host',
        'has_liked' => true,
        'has_joined' => true,
    ];
});

$factory->state(Sinergia::class, 'promoting', function(Faker $faker) {
    return [
        'jam_role' => 'promoter',
        'has_liked' => true,
        'has_joined' => true,
    ];
});

$factory->state(Sinergia::class, 'randomized', function (Faker $faker) {
    return [
        'user_id' =>  $faker->numberBetween(3,253),
        'has_liked' =>  $faker->numberBetween(0,1,1),
        'has_joined' =>  true,
        'is_performing' =>  $faker->numberBetween(0,1,1),
    ];
});


$factory->define(Sinergia::class, function(Faker $faker) {
    return [
        'jam_id' =>  $faker->numberBetween(1,50),
    ];
});
