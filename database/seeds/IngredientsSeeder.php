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
            ],
            [
                'ingredients' => ['lettuce', 'tomato', 'green pepper', 'apples']
            ],
            [
                'ingredients' => ['peanut butter', 'almonds', 'pecans', 'almond butter']
            ],
            [
                'ingredients' => ['black beans', 'kidney beans', 'diced tomatoes', 'jalepenos']
            ],
            [
                'ingredients' => ['chorizo', 'chicken breasts', 'ground beef', 'ground pork']
            ],
            [
                'ingredients' => ['cumin', 'oregano', 'onion powder', 'garlic']
            ],
            [
                'ingredients' => ['spaghetti noodles', 'macaroni noodles', 'rotini', 'penne']
            ],
            [
                'ingredients' => ['baking powder', 'baking soda', 'heavy cream', 'vanilla extract']
            ],
            [
                'ingredients' => ['onion', 'celery', 'carrots', 'mushrooms']
            ],
            [
                'ingredients' => ['chicken broth', 'beef broth', 'water', 'tomato sauce']
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
