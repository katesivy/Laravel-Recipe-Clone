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
                    [
                        'id' => 3,
                        'amt' => '4 cups chopped'
                    ],
                    [
                        'id' => 4,
                        'amt' => '2 tlb'
                    ],
                    [
                        'id' => 5,
                        'amt' => '1 tlb'
                    ],
                    [
                        'id' => 6,
                        'amt' => '1/2 Cup'
                    ]
                ],
            ],
            [
                'recipe_id' => 2,
                'quantity' => [
                    [
                        'id' => 7,
                        'amt' =>  '4 oz.',
                    ],
                    [
                        'id' => 9,
                        'amt' =>  '2 slices',
                    ]
                ]
            ],
            [
                'recipe_id' => 3,
                'quantity' => [
                    [
                        'id' => 13,
                        'amt' =>  '1.5 Cups',
                    ],
                    [
                        'id' => 14,
                        'amt' =>  '4 tlb melted',
                    ],
                    [
                        'id' => 11,
                        'amt' =>  '8',
                    ],
                    [
                        'id' => 17,
                        'amt' =>  '1/2 Cup',
                    ],
                    [
                        'id' => 18,
                        'amt' =>  '1/2 Cup',
                    ],
                    [
                        'id' => 19,
                        'amt' =>  '2 Cups',
                    ],
                    [
                        'id' => 20,
                        'amt' =>  '3 Cups, wilted',
                    ],
                    [
                        'id' => 21,
                        'amt' =>  'dash',
                    ],
                    [
                        'id' => 22,
                        'amt' =>  '1/2 tsp',
                    ],
                    [
                        'id' => 23,
                        'amt' =>  '1/4 tsp',
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
