<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UselessTest;
use Faker\Generator as Faker;

$factory->define(UselessTest::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name
    ];
});
