<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index ()
    {
        return new Ingredients(Ingredient::all());
    }

    public function recipeIds ($recipe_id)
    {
        return Ingredient::where('recipe_id', $recipe_id)->get();
    }
}
