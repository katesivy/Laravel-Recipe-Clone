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
            'image' => './Images/7BC770FB-61F6-414B-B1AE-3E3F2E724A03.jpeg',
            'servings' => 4,
            'cooking_time' => 45,
            'user_id' => 1
            ],
            [
            'id' => 2,
            'title'=> "Peanut Butter & Jelly",
            'image' => './Images/2FE51160-FB03-4716-B8C0-5766791547BE_1_105_c.jpeg',
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
