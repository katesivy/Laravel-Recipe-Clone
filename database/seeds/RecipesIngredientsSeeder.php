<?php

use Illuminate\Database\Seeder;
use App\RecipeIngredient;

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
                'quantity' => ['4', '2 cups', '4 cups, chopped', '2 tlb', '1 tlb', '1/2 C'] 
            ],
            [
                'recipe_id' => 2,
                'quantity' => ['4 tlb', '4 tlb', '2 slices']
            ]
        ];
        foreach ($recIngredArray as &$recIngredObj) {
            foreach ($recIngredObj['quantity'] as &$recIngred) {
                RecipeIngredient::create([
                    'recipe_id' => $recIngredObj['recipe_id'],
                    'quantity' => $recIngred
                ]);
            }
        }
    }
}
