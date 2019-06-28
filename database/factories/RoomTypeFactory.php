<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\RoomType;
$factory->define(RoomType::class, function (Faker $faker) {
    return [
        'description' => "De Luxe",
        'qty' => 3,
        'price' => 1200,
        'maximum_pax' => 3,
    ];
});
