<?php

use Illuminate\Database\Seeder;
use App\Recipe;


class RecipesSeeder extends Seeder
{
    public function run()
    {
        $recipesArray = [
            [
            'id' => 1,
            'title' => "Chicken Stir Fry",
            'image' => './Images/rice.jpeg',
            'servings' => 4,
            'cooking_time' => 45,
            'user_id' => 1
            ],
            [
            'id' => 2,
            'title'=> "Peanut Butter & Jelly",
            'image' => './Images/sandwich.jpeg',
            'servings' => 4,
            'cooking_time' => 3,
            'user_id' => 1
            ]
         ];
            //  Recipe::create($recipesArray[0]);
            foreach($recipesArray as &$Recipe) {
                Recipe::create($Recipe);
            }
    }
}
