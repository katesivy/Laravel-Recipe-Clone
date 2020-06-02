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
                'directions' => ['Place chicken thighs in a 9x13 pan. Sprinkle with powdered ginger and paprika. Pour in coconut aminos. ', '  Bake chicken at 425° for 40 min. ', 'Shred chicken into bit-sized pieces. ', 'Place broccoli in a steamer basket in a large pot of boiling water; steam for 5-10 min until crisp-tender. ', '  Simmer rice in 4 C water for 20 min. ', '  Serve broccoli and chicken in bowls over rice; add more coconut aminos as desired.'],
            ],
            [
                'recipe_id' => 2,
                'directions' => ['Place a skillet on medium heat.', 'Spread butter on one side of each slice of bread. Place one slice buttered-side down in the skillet.', 'Place the cheese on top of the bread in the skillet; cover with the other slice of bread so that the buttered side is facing up.', 'Let cook for approx. 5 minutes until the bottom is golden brown. Flip carefully with a spatula, and cook a few more minutes until the second side is golden brown.']
            ],
            [
                'recipe_id' => 3,
                'directions' => ['Preheat the oven to 325°', 'Mix melted butter with almond flour. Press into pie dish and bake at 325° for 15 min. or until golden brown. Let cool.', 'Beat eggs in a large bowl; add remaining ingredients. Bake at 350° for 45 min.']
            ],
            [
                'recipe_id' => 4,
                'directions' => ['Melt chocolate in microwave in 30-second increments, stirring frequently. Let cool.', 'In a stand mixer, beat butter and confectioners swerve for 30 seconds.', 'Slowly add in the vanilla and chocolate with the mixer on med-low.', 'Increase the mixer speed to medium-high, add 1 egg, and beat for 5 minutes. Then add the next egg, beat for 5 minutes, and repeat the process with the last egg.', 'Scoop filling into pie crust and refrigerate.']
            ],
            [
                'recipe_id' => 5,
                'directions' => ['Heat oats, milk, & sugar in a small pot on medium heat for 5 min until desired consistency, stirring occassionally.']
            ],
            [
                'recipe_id' => 6,
                'directions' => ['Form beef into 4-oz patties and sprinkle with salt & pepper.', 'Cook in large skillet over med-high heat approx. 5 min on each side.', 'Serve on buns with desired toppings.']
            ],
            [
                'recipe_id' => 7,
                'directions' => ['Cook vegetables in 1 tlb oil for 5-10 min in a skillet, if using a slow-cooker, or in the instant pot.', 'Add vegetables and broth to slow cooker or instant pot. Cook in slow cooker on low for 2-4 hours or in instant pot for 20 min.']
            ],
            [
                'recipe_id' => 8,
                'directions' => ['Shred chicken and place approx. 2 tlb in each tortilla.', 'Roll tortillas into tight rolls', 'Fry tortillas in a large skillet on med. heat until golden brown.', 'Top with shredded lettuce, tomatoes, salsa, and sour cream.']
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
