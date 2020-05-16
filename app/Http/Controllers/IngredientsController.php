<?php

namespace App\Http\Controllers;
use App\Http\Resources\IngredientsResource;
use App\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index ()
    {
        return new IngredientsResource(Ingredient::all());
    }

    public function recipeIds ($recipe_id)
    {
        return new IngredientsResource(Ingredient::where('recipe_id', $recipe_id)->get());
    }
}
