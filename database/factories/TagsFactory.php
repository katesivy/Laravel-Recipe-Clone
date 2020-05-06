<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\categories;
use Faker\Generator as Faker;

$factory->define(tags::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});
