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
            'title'=> "Grilled Cheese Sandwich",
            'image' => './Images/sandwich.jpeg',
            'servings' => 1,
            'cooking_time' => 10,
            'user_id' => 1
            ],
            [
            'id' => 3,
            'title'=> "Quiche",
            'image' => './Images/quiche.jpeg',
            'servings' => 6,
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
