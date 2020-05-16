<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\RecipesResource;
use App\Recipe;


class RecipesController extends Controller
{
    public function index ()
    {
        return new RecipesResource(Recipe::with(['user', 'tags', 'directions', 'ingredients'])->get());
    }

    public function getRecipesByUser ($userId) 
    {
        return new RecipesResource(Recipe::with(['user', 'tags', 'directions', 'ingredients'])->where('user_id', $userId)
        ->get());
    }

    public function recipeIngred () 
    {
        return new RecipesResource(Ingredient::with(['ingredients'])
        ->get());
    }
}
