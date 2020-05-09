<?php

use Illuminate\Database\Seeder;
use App\RecipeTag;

class RecipeTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RecipeTag = [
            'recipe_id' => 1,
            'tag_id' => 1
        ];
        RecipeTag::create($RecipeTag);
    }
}
