<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredientsArray = [
            [
                'recipe_id' => 1,
                'ingredients' => ['chicken thighs', 'rice', 'broccoli', 'powdered ginger', 'paprika', 'coconut aminos']
            ],
            [
                'recipe_id' => 2,
                'ingredients' => ['peanut butter', 'jelly', 'bread']
            ]
        ];
        foreach ($ingredientsArray as &$IngredientsObj) {
            foreach ($IngredientsObj['ingredients'] as &$Ingredient) {
                Ingredient::create([
                    'recipe_id' => $IngredientsObj['recipe_id'],
                    'ingredient' => $Ingredient
                ]);
            }
        }
    }
}
