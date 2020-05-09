<?php

use Illuminate\Database\Seeder;
use App\Tag;


class TagsSeeder extends Seeder
{
    public function run()
    {
        $tagsArray = [
            [
            'category' => "breakfast"
            ],
            [
            'category' => "lunch"
            ],
            [
            'category' => "snacks"
            ],
            [
            'category' => "dinner"
            ],
            [
            'category' => "dessert"
            ],
            [
            'category' => "gluten free"
            ],
            [
            'category' => "vegetarian"
            ],
            [
            'category' => "quick prep"
            ]
            
            
            ];
            //  Recipe::create($tagsArray[0]);
            foreach ($tagsArray as &$TagsObj) {
                    Tag::create($TagsObj);
                
            }
    }
}
