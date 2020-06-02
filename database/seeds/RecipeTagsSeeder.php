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
            ],
            [
                'recipe_id' => 4,
                'tag_id' => 17
            ],
            [
                'recipe_id' => 4,
                'tag_id' => 4
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 1
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 13
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 16
            ],
            [
                'recipe_id' => 6,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 6,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 6,
                'tag_id' => 6
            ],
            [
                'recipe_id' => 6,
                'tag_id' => 13
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 2
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 8
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 15
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 14
            ],
            [
                'recipe_id' => 8,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 8,
                'tag_id' => 9
            ],
            [
                'recipe_id' => 8,
                'tag_id' => 3
            ]
        ];
        foreach ($recipeTagArray as &$RecipeTag) {
            RecipeTag::create($RecipeTag);
        }
    }
}
