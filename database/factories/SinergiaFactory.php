<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sinergia;
use Faker\Generator as Faker;

$factory->state(App\Sinergia::class, 'promotion', function() {
    return [
        'jam_role' => 'promoter',
    ];
});

$factory->state(App\Sinergia::class, 'co-hosting', function() {
    return [
        'jam_role' => 'co_host',
    ];
});


$factory->define(Sinergia::class, function (Faker $faker) {
    return [
        'jam_id' =>  $faker->numberBetween(0,10),
        'user_id' =>  $faker->numberBetween(3,37),
        'has_liked' =>  $faker->numberBetween(0,1),
        'has_joined' =>  $faker->numberBetween(0,1),
        'is_performing' =>  $faker->numberBetween(0,1)
    ];
});
