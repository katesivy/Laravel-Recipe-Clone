<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 use App\Http\Resources\Recipes;
  use App\Recipe;


class RecipesController extends Controller
{
    public function index ()
    {
        return new Recipes(Recipe::all());
    }
}
