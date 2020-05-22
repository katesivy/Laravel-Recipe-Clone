<?php

namespace App\Http\Controllers;
use App\Http\Resources\IngredientsResource;
use App\Ingredient;


class IngredientsController extends Controller
{
    public function index ()
    {
        return new IngredientsResource(Ingredient::orderBy('ingredient', 'asc')->get());
    }

    public function recipeIds ($recipe_id)
    {
        return new IngredientsResource(Ingredient::where('recipe_id', $recipe_id)->get());
    }
}
