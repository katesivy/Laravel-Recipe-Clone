<?php

use Illuminate\Database\Seeder;
use App\RecipeTag;

class RecipeTagsSeeder extends Seeder
{
    public function run()
    {
        $recipeTagArray = [
            [
                'recipe_id' => 1,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 9
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 11
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 2
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 16
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 8
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 13
            ],
            [
                'recipe_id' => 3,
                'tag_id' => 12
            ],
            [
                'recipe_id' => 3,
                'tag_id' => 1
            ],
            [
                'recipe_id' => 3,
                'tag_id' => 6
            ],
            [
                'recipe_id' => 3,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 10
            ]
        ];
        foreach ($recipeTagArray as &$RecipeTag) {
            RecipeTag::create($RecipeTag);
        }
    }
}
