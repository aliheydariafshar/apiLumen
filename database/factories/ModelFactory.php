<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = \Illuminate\Support\Facades\Hash::make('secret'),
        'api_token' => \Illuminate\Support\Str::random(100),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(5),
        'price' => $faker->numberBetween(1000,10000),
        'image' => $faker->imageUrl(),
    ];
});

$factory->define(App\Episode::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(5),
        'videoUrl' => 'https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4',
    ];
});

