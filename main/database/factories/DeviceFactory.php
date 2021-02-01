<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [
        'name' => $faker -> domainWord,
        'model' => $faker -> isbn10,
        'price' => $faker -> numberBetween(5000,50000),
        'consumption' => $faker -> numberBetween(50,400)
    ];
});
