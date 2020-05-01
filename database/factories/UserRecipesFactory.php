<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\user_;
use Faker\Generator as Faker;

$factory->define(user_recipes::class, function (Faker $faker) {
    return [
        'user_id' => $faker->int,
        'recipe_id'=>$faker->int
    ];
});
