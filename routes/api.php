<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\RecipesCollection;
use App\Recipe;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::middleware('auth:api')->group(function() {

    Route::get('user/{userId}/detail', 'UserController@show');
});

// Route::get('/recipes', function () {
//     return new RecipesResource(Recipes::find(1));
// });

// Route::get('/recipes', function () {
//     return new RecipesCollection(Recipes::all());
// });

Route::get('/recipes', 'RecipesController@index');