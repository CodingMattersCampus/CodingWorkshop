<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'password' => Hash::make('password'),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
