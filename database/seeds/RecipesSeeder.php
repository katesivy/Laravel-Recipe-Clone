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
            'image' => 'rice.jpeg',
            'servings' => 4,
            'cooking_time' => 45,
            'user_id' => 1
            ],
            [
            'id' => 2,
            'title'=> "Grilled Cheese Sandwich",
            'image' => 'grilledchz.jpeg',
            'servings' => 1,
            'cooking_time' => 10,
            'user_id' => 1
            ],
            [
            'id' => 3,
            'title'=> "Quiche",
            'image' => 'quiche.jpeg',
            'servings' => 6,
            'cooking_time' => 45,
            'user_id' => 1
            ],
            [
            'id' => 4,
            'title'=> "Chocolate Pie Filling",
            'image' => 'chocpie.jpeg',
            'servings' => 8,
            'cooking_time' => 40,
            'user_id' => 1
            ],
            [
            'id' => 5,
            'title'=> "Oatmeal",
            'image' => 'oatmeal.jpeg',
            'servings' => 4,
            'cooking_time' => 40,
            'user_id' => 1
            ],
            [
            'id' => 6,
            'title'=> "Hamburgers",
            'image' => 'hamburger.jpeg',
            'servings' => 8,
            'cooking_time' => 15,
            'user_id' => 1
            ],
            [
            'id' => 7,
            'title'=> "Vegetable Soup",
            'image' => 'soup.jpeg',
            'servings' => 8,
            'cooking_time' => 15,
            'user_id' => 2
            ],
            [
            'id' => 8,
            'title'=> "Taquitos",
            'image' => 'Taquitos.jpeg',
            'servings' => 8,
            'cooking_time' => 15,
            'user_id' => 2
            ]
         ];
            //  Recipe::create($recipesArray[0]);
            foreach($recipesArray as &$Recipe) {
                Recipe::create($Recipe);
            }
    }
}
