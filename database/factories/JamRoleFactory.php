<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JamRole;
use Faker\Generator as Faker;


$factory
->state(JamRole::class, 'is-host', function(Faker $faker) {
    return [
        'role' => 'host'
    ];
});

$factory
->state(JamRole::class, 'is-co_host', function(Faker $faker) {
    return [
        'role' => 'co_host'
    ];
})
->afterCreatingState(JamRole::class, 'is-co_host', function($jamRole){
    //  Add yaman
    factory(App\Yaman::class)->create([
        'jam_id' => $jamRole->jam_id,
        'user_id' => $jamRole->user_id
    ]);

    //  Add type of jammer: performer
    factory(App\Jammer::class)->states('as-performer')->create([
        'jam_id' => $jamRole->jam_id,
        'user_id' => $jamRole->user_id
    ]);
});

$factory
->state(JamRole::class, 'is-promoter', function(Faker $faker) {
    return [
        'role' => 'promoter'
    ];
})
->afterCreatingState(JamRole::class, 'is-promoter', function($jamRole){

    //  Add yaman
    factory(App\Yaman::class)->create([
        'jam_id' => $jamRole->jam_id,
        'user_id' => $jamRole->user_id
    ]);

    //  Add type of jammer: null
    factory(App\Jammer::class)->create([
        'jam_id' => $jamRole->jam_id,
        'user_id' => $jamRole->user_id
    ]);

});

$factory
->define(JamRole::class, function (Faker $faker) {
    return [
        //
        'jam_id' =>  $faker->numberBetween(1,50),
        'user_id' =>  $faker->numberBetween(3,253),
    ];
});
