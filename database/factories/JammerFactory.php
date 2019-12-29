<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jammer;
use Faker\Generator as Faker;

$factory->state(Jammer::class, 'as-host', function(Faker $faker) {
    return [
        'jammer_type' => 'host'
    ];
});

$factory->state(Jammer::class, 'as-performer', function(Faker $faker) {
    return [
        'jammer_type' => 'performer'
    ];
});

$factory->state(Jammer::class, 'as-default', function(Faker $faker) {
    return [
        'jammer_type' => $faker->randomElement(
            array('default', 'default', 'performer'))
    ];
})
->afterCreatingState(Jammer::class, 'as-default', function ($jammer) {
    //  Add yaman
    factory(App\Yaman::class)->create([
        'jam_id' => $jammer->jam_id,
        'user_id' => $jammer->user_id
    ]);
});

$factory->define(Jammer::class, function (Faker $faker) {
    return [
        //
        'jam_id' =>  $faker->numberBetween(1,50),
        'user_id' =>  $faker->numberBetween(3,253),
    ];
});
