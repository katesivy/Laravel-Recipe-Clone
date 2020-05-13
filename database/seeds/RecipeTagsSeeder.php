<?php

use Illuminate\Database\Seeder;
use App\RecipeTag;

class RecipeTagsSeeder extends Seeder
{
    public function run()
    {
        $recipeTagArray = [
            // [
            //     'recipe_id' => 1,
            //     'tag_id' => 4
            // ],
            [
                'recipe_id' => 1,
                'tag_id' => 6
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 2
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 7
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 8
            ]
        ];
        foreach ($recipeTagArray as &$RecipeTag) {
            RecipeTag::create($RecipeTag);
        }
    }
}
