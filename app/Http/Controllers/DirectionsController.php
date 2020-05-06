<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Directions;
use App\Direction;


class DirectionsController extends Controller
{
    public function index ()
    {
    return new Directions(Direction::all());
    }


    public function recipeIds ($recipe_id)
    {
        return Direction::where('recipe_id', $recipe_id)->get();
    }
}
