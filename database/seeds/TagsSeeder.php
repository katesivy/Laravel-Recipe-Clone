<?php

use Illuminate\Database\Seeder;
use App\Tag;


class TagsSeeder extends Seeder
{
    public function run()
    {
        $tagsArray = [
            [
            'recipe_id' => 2,
            'category' => "breakfast"
            ],
            [
            'recipe_id' => 1,
            'category' => "lunch"
            ],
            [
            'recipe_id' => 2,
            'category' => "snacks"
            ],
            [
            'recipe_id' => 1,
            'category' => "dinner"
            ],
            [
            'recipe_id' => 2,
            'category' => "dessert"
            ],
            [
            'recipe_id' => 1,
            'category' => "gluten free"
            ],
            [
            'recipe_id' => 2,
            'category' => "vegetarian"
            ],
            [
            'recipe_id' => 2,
            'category' => "quick prep"
            ],
            
            
            ];
            //  Recipe::create($tagsArray[0]);
            foreach ($tagsArray as &$TagsObj) {
                    Tag::create(
                       $TagsObj
                    );
                
            }
    }
}
