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
            'image' => 'https://source.unsplash.com/random',
            'servings' => 4,
            'cooking_time' => 45
            ],
            [
            'id' => 2,
            'title'=> "Peanut Butter & Jelly",
            'image' => 'https://source.unsplash.com/random',
            'servings' => 4,
            'cooking_time' => 3
            ]
            ];
            //  Recipe::create($recipesArray[0]);
            foreach($recipesArray as &$Recipe) {
                Recipe::create($Recipe);
            }
    }
}
