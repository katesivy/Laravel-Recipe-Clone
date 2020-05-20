<?php

namespace App\Http\Controllers;
use App\Http\Resources\DirectionsResource;
use App\Direction;

class DirectionsController extends Controller
{
    protected $guarded = []; 
    public function index ()
    {
        return new DirectionsResource(Direction::all());
    }


    public function recipeIds ($recipe_id)
    {
        return Direction::where('recipe_id', $recipe_id)->get();
    }

    public function recipeTags ($tag_id)
    {
        return Direction::where('tag_id', $tag_id)->get();
    }
}
