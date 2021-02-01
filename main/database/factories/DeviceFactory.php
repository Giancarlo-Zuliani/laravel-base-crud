<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [
        'name' => $faker -> domainWord,
        'model' => $faker -> isbn10,
        'consumption' => $faker -> numberBetween(50,400),
        'price' => $faker -> numberBetween(5000,40000)
    ];
});
