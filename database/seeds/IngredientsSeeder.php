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
                'ingredients' => ['cheddar cheese', 'jelly', 'bread']
            ],
            [
                'ingredients' => ['sugar', 'eggs', 'flour', 'almond flour']
            ],
            [
                'ingredients' => ['butter', 'chocolate chips', 'cocoa powder']
            ],
            [
                'ingredients' => ['milk', 'sour cream', 'mozzarella cheese', 'spinach']
            ],
            [
                'ingredients' => ['nutmeg', 'salt', 'pepper', 'chili powder']
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
