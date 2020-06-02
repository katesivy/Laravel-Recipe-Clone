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
            ],
            [
                'recipe_id' => 4,
                'quantity' => [
                    [
                        'id' => 119,
                        'amt' =>  '4 oz',
                    ],
                    [
                        'id' => 14,
                        'amt' =>  '1.5 Cups',
                    ],
                    [
                        'id' => 90,
                        'amt' =>  '1 Cup',
                    ],
                    [
                        'id' => 71,
                        'amt' =>  '1 tsp',
                    ],
                    [
                        'id' => 11,
                        'amt' =>  '3',
                    ]
                ]
            ],
            [
                'recipe_id' => 5,
                'quantity' => [
                    [
                        'id' => 97,
                        'amt' =>  '1 Cup',
                    ],
                    [
                        'id' => 17,
                        'amt' =>  '2 Cups',
                    ],
                    [
                        'id' => 92,
                        'amt' =>  '2 tlb',
                    ]
                ]
            ],
            [
                'recipe_id' => 6,
                'quantity' => [
                    [
                        'id' => 39,
                        'amt' =>  '1 lb',
                    ],
                    [
                        'id' => 22,
                        'amt' =>  '2 tsp',
                    ],
                    [
                        'id' => 23,
                        'amt' =>  '1 tsp',
                    ]
                ]
            ],
            [
                'recipe_id' => 7,
                'quantity' => [
                    [
                        'id' => 66,
                        'amt' =>  '4 cups',
                    ],
                    [
                        'id' => 61,
                        'amt' =>  '1 medium',
                    ],
                    [
                        'id' => 64,
                        'amt' =>  '8 oz, chopped',
                    ],
                    [
                        'id' => 63,
                        'amt' =>  '4',
                    ],
                    [
                        'id' => 62,
                        'amt' =>  '2 stalks',
                    ]
                ]
            ],
            [
                'recipe_id' => 8,
                'quantity' => [
                    [
                        'id' => 38,
                        'amt' =>  '1 lb, cooked & shredded',
                    ],
                    [
                        'id' => 121,
                        'amt' =>  '10',
                    ],
                    [
                        'id' => 49,
                        'amt' =>  '1 tsp',
                    ],
                    [
                        'id' => 50,
                        'amt' =>  '1 tsp',
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
