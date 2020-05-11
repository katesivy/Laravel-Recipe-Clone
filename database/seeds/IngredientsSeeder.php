<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientsSeeder extends Seeder
{
    public function run()
    {
        $ingredientsArray = [
            [
                'ingredients' => ['chicken thighs', 'rice', 'broccoli', 'powdered ginger',  'paprika', 'coconut aminos'],
            ],
            [
                'ingredients' => ['peanut butter', 'jelly', 'bread']
            ]
        ];
         foreach ($ingredientsArray as &$IngredientsObj) {
             foreach ($IngredientsObj['ingredients'] as &$Ingredient) {
                Ingredient::create([
                    'ingredient' => $Ingredient
                ]);
            }
       }
    }
}
