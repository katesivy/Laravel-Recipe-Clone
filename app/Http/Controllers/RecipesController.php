<?php

namespace App\Http\Controllers;
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

   
    // public function create ()
    // {
    //     $recipe = Recipe::store([
    //         'title' => $request['title'],
    //         'servings' => $request['servings'],
    //         'cooking_time' => $request['cooking_time'],
    //         'image' => $request['image'],
    //         'user_id' => 4
    //     ]);

    //     $recipe->save();
    // }

    // public function store ()
    // {
    //     $recipe = Recipe::store([
    //         'title' => $request['title'],
    //         'servings' => $request['servings'],
    //         'cooking_time' => $request['cooking_time'],
    //         'image' => $request['image'],
    //         'user_id' => 4
    //     ]);
    // }

    // public function edit () 
    // {

    // }

    // public function update () 
    // {
        // $recipe = Recipe::update([
            //         'title' => $request['title'],
            //         'servings' => $request['servings'],
            //         'cooking_time' => $request['cooking_time'],
            //         'image' => $request['image'],
            //         'user_id' => 4
            //     ]);
        
            //     $recipe->save();
    // }

    // public function destroy () 
    // {

    // }
}

