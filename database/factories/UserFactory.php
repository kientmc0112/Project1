<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'id' => '1',
        'name' => $faker->sentence(2),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make(12345),
        'phone' => $faker->phoneNumber,
        'address' => $faker->paragraph(1),
        'avatar' => $faker->fileExtension,
        'role_id' => '1',
        'remember_token' => '1',
        'remember_token' => $faker->numberBetween(100, 999),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        'name'        => $faker->sentence(2),
        'description' => $faker->paragraph(4),
        'completed'   => false
    ];
});
