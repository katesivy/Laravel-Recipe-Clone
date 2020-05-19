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

Route::post('/createform', 'AuthController@createform');
// Route::post('/store', 'RecipesController@store');
Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'AuthController@logout');
    Route::get('user/{userId}/detail', 'UserController@show');
});

Route::get('/getRecipesByUser/{user_id}', 'RecipesController@getRecipesByUser');

Route::get('/recipes', 'RecipesController@index');
Route::get('/ingredients', 'IngredientsController@index');
Route::get('/tags', 'TagsController@index');
Route::get('/directions/{recipe_id}', 'DirectionsController@recipeIds');
Route::get('/ingredients/{recipe_id}', 'IngredientsController@recipeIds');
Route::get('/tags/{recipe_id}', 'TagsController@recipeIds');
Route::get('/modify', 'RecipesController@getRecipesByUser');

Route::put('/modify', 'RecipesController@update');