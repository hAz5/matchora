<?php

use Faker\Generator as Faker;
use App\Plan;
$factory->define(App\Plan::class, function (Faker $faker) {
    return [
        Plan::PERIOD => array_rand([30, 60, 90, 365, 180]),
        Plan::AMOUNT => rand(1000, 55000),
        Plan::NAME => $faker->name,
        Plan::DESCRIPTION => $faker->text
    ];
});
