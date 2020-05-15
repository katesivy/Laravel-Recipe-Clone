<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Recipes;
use App\Recipe;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', function () {
        return Recipes(Recipe::all());
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
