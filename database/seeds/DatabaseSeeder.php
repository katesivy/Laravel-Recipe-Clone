<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
    
          $this->call([
            // UserSeeder::class,
            RecipesSeeder::class,
            IngredientsSeeder::class,
            DirectionsSeeder::class,
            TagsSeeder::class,
            RecipesIngredientsSeeder::class
        ]);
    } 
}