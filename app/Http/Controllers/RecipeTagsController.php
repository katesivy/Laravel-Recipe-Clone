<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeTagsController extends Controller
{
    public function index ()
    {
    return new RecipeTags(RecipeTag::all());
    }

    public function recipeIds ($recipe_id)
    {
        return RecipeTags::where('recipe_id', $recipe_id)->get();
    }
}
