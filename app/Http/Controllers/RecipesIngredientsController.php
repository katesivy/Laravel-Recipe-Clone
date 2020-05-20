<?php

namespace App\Http\Controllers;
use App\RecipeIngredient;

use Illuminate\Http\Request;

class RecipesIngredientsController extends Controller
{
    public function index ()
    {
        return new RecipesIngredient(RecipeIngredient::all());
    }

    public function recipeIds ($recipe_id)
    {
        return RecipeIngredient::where('recipe_id', $recipe_id)->get();
    }

    public function recipeTags ($tag_id)
    {
        return RecipeIngredient::where('tag_id', $tag_id)->get();
    }
}
