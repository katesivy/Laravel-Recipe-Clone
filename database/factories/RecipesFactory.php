<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

 use App\Recipe;
use Faker\Generator as Faker;
// use App\Http\Resources\RecipesCollection;
// use App\Http\Resources\Recipes;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'ingredients' => $faker->text,
        'directions' => $faker->text,
        // 'rating' => $faker->unsignedBigInteger,
        'nutrition_facts' => $faker->text,
        // 'image' => $faker->imageUrl
    ];
});
