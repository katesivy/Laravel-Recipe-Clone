<?php

use Illuminate\Database\Seeder;
 use App\Recipes;
// use App\Http\Resources\Recipes;

class RecipesdbSeeder extends Seeder
{
    public function run()
    {
         factory(App\Recipes::class, 20)->create();

       
     }
}
