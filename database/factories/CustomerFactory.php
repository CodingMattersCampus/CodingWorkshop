<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Customer;
$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => "Coder Programmer",
    ];
});
