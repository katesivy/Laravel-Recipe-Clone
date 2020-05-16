<?php

use Illuminate\Database\Seeder;
use App\Direction;


class DirectionsSeeder extends Seeder
{
    public function run()
    {
        $directionsArray = [
            [
                'recipe_id' => 1,
                'directions' => ['Place chicken thighs in a 9x13 pan. Sprinkle with powdered ginger and paprika. Pour in coconut aminos. ', '  Bake chicken at 425° for 40 min. ', 'Shred chicken into bit-sized pieces. ', '  Place chicken thighs in a 9x13 pan. Sprinkle with powdered ginger and paprika. Pour in coconut aminos. ', 'Place broccoli in a steamer basket in a large pot of boiling water; steam for 5-10 min until crisp-tender. ', '  Simmer rice in 4 C water for 20 min. ', '  Serve broccoli and chicken in bowls over rice; add more coconut aminos as desired.'],
            ],
            [
                'recipe_id' => 2,
                'directions' => ['Place a skillet on medium heat.', 'Spread butter on one side of each slice of bread. Place one slice buttered-side down in the skillet.', 'Place the cheese on top of the bread in the skillet; cover with the other slice of bread so that the buttered side is facing up.', 'Let cook for approx. 5 minutes until the bottom is golden brown. Flip carefully with a spatula, and cook a few more minutes until the second side is golden brown.']
            ],
            [
                'recipe_id' => 3,
                'directions' => ['Preheat the oven to 325°', 'Mix melted butter with almond flour. Press into pie dish and bake at 325° for 15 min. or until golden brown. Let cool.', 'Beat eggs in a large bowl; add remaining ingredients. Bake at 350° for 45 min.']
            ]
        ];
        // Direction::create($directionsArray[0]);
        foreach ($directionsArray as &$DirectionsObj) {
            foreach ($DirectionsObj['directions'] as &$Direction) {
                Direction::create([
                    'recipe_id' => $DirectionsObj['recipe_id'],
                    'direction' => $Direction
                ]);
            }
        }
    }
}
