<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory
    ->state(User::class, 'has-jam', [])
    ->afterCreatingState(User::class, 'has-jam', function ($user, $faker) {
        factory(App\Jam::class)->states('jam-session')->create([
            'user_id' => $user->id,
        ]);
    });

$factory
    ->state(User::class, 'is-co_host', [])
    ->afterCreatingState(User::class, 'is-co_host', function ($user, $faker) {
        factory(App\Sinergia::class)->states('co-hosting')->create([
            'user_id' => $user->id,
        ]);
    });

$factory
    ->state(User::class, 'is-promoter', [])
    ->afterCreatingState(User::class, 'is-promoter', function ($user, $faker) {
        factory(App\Sinergia::class)->states('promoting')->create([
            'user_id' => $user->id,
        ]);
    });


$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

    ];
});
