<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\RecipesCollection;
use App\Recipe;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');

Route::middleware('auth:api')->group(function() {

    Route::get('user/{userId}/detail', 'UserController@show');
    
});

// Route::get('/recipes', function () {
//     return new RecipesResource(Recipes::find(1));
// });
Route::get('/getRecipesByUser/{user_id}', 'RecipesController@getRecipesByUser');

Route::get('/recipes', 'RecipesController@index');
Route::get('/directions/{recipe_id}', 'DirectionsController@recipeIds');
Route::get('/ingredients/{recipe_id}', 'IngredientsController@recipeIds');
Route::get('/tags/{recipe_id}', 'TagsController@recipeIds');
// Route::get('/type/{recipe_id}', 'RecipesIngredientsController@recipeTags');
// Route::get('/diet/{recipe_id}', 'RecipesIngredientsController@recipeTags');
// Route::get('/mains/{recipe_id}', 'RecipesIngredientsController@recipeTags');
// Route::get('/method/{recipe_id}', 'RecipesIngredientsController@recipeTags');

