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
                'ingredients' => ['shrimp', 'scallops', 'crab meat', 'lobster tails']
            ],
            [
                'ingredients' => ['pork butt', 'pork chops', 'pork loin', 'bacon']
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
            ],
            [
                'ingredients' => ['cherry pie filling', 'almond flavoring', 'vanilla', 'butterscotch chips']
            ],
            [
                'ingredients' => ['refried beans', 'lemon juice', 'green chilies', 'black olives']
            ],
            [
                'ingredients' => ['cheddar cheese', 'avocados', 'taco seasoning mix', 'green onions']
            ],
            [
                'ingredients' => ['tortilla chips', 'taco shells', 'potato chips', 'corn flakes']
            ],
            [
                'ingredients' => ['cashews', 'peanuts', 'walnuts', 'pine nuts']
            ],
            [
                'ingredients' => ['coconut', 'confectioners swerve', 'lakanto', 'brown sugar']
            ],
            [
                'ingredients' => ['rum', 'vodka', 'instant vanilla pudding', 'yellow cake mix']
            ],
            [
                'ingredients' => ['oats', 'bread flour', 'all purpose flour', 'gluten free flour']
            ],
            [
                'ingredients' => ['potatoes', 'cauliflower', 'green beans', 'arugula']
            ],
            [
                'ingredients' => ['cucumber', 'squash', 'lemon', 'lime']
            ],
            [
                'ingredients' => ['spaghetti squash', 'watermelon', 'ginger', 'cilantro']
            ],
            [
                'ingredients' => ['parsley', 'rosemary', 'thyme', 'sage']
            ],
            [
                'ingredients' => ['canned pumpkin', 'instant coffee', 'bakers chocolate', 'mayonnaise']
            ],
            [
                'ingredients' => ['tortillas']
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
