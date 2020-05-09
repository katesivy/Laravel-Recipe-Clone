<?php

use Illuminate\Database\Seeder;
use App\IngredientRecipes;

class RecipesIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recIngredArray = [
            [
                'recipe_id' => 1,           
                'quantity' => [
                    [
                        'id' => 1,
                        'amt' => '4'
                    ], 
                    [
                        'id' => 2,
                        'amt' => '2 cups'
                    ], 
                    // '4 cups, chopped', '2 tlb', '1 tlb', '1/2 C'] 
                ],
            ],
            [
                'recipe_id' => 2,             
                'quantity' => [
                    [
                    'id' => 7,
                    'amt' =>  '4 tlb',
                    ],
                    [
                    'id' => 8,
                    'amt' =>  '2 slices',
                    ]
                ]
            ]
        ];
        foreach ($recIngredArray as &$recIngredObj) {
            foreach ($recIngredObj['quantity'] as &$recIngred) {
                IngredientRecipes::create([
                    'recipe_id' => $recIngredObj['recipe_id'],
                    'ingredient_id' => $recIngred['id'],
                    'quantity' => $recIngred['amt']
                ]);
            }
        }
    }
}
