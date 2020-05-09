<?php

namespace App\Http\Controllers;
use App\RecipeIngredient;

use Illuminate\Http\Request;

class RecipesIngredientsController extends Controller
{
    public function index ()
    {
        return new RecipesIngredients(RecipeIngredient::all());
    }

    public function recipeIds ($recipe_id)
    {
        return RecipeIngredient::where('recipe_id', $recipe_id)->get();
    }
}
