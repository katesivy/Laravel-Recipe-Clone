<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\recipe_categories;
use Faker\Generator as Faker;

$factory->define(recipe_categories::class, function (Faker $faker) {
    return [
       'category_id' => $faker->int,
       'recipe_id' => $faker->int
    ];
});
