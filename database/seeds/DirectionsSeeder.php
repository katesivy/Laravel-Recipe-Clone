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
                'directions' => ['Place chicken thighs in a 9x13 pan. Sprinkle with powdered ginger and paprika. Pour in coconut aminos. ', '  Bake chicken at 425° for 40 min. ', '  Shred chicken into bit-sized pieces. ', '  Place chicken thighs in a 9x13 pan. Sprinkle with powdered ginger and paprika. Pour in coconut aminos. ', '  Place broccoli in a steamer basket in a large pot of boiling water; steam for 5-10 min until crisp-tender. ', '  Simmer rice in 4 C water for 20 min. ', '  Serve broccoli and chicken in bowls over rice; add more coconut aminos as desired.'],
            ],
            [
                'recipe_id' => 2,
                'directions' => ['make a sandwich', 'eat']
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
