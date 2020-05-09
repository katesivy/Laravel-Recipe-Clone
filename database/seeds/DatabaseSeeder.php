<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
          $this->call([
            UsersSeeder::class,
            RecipesSeeder::class,
            DirectionsSeeder::class,
            IngredientsSeeder::class,
            TagsSeeder::class,
            RecipesIngredientsSeeder::class,
            RecipeTagsSeeder::class,

        ]);
    } 
}