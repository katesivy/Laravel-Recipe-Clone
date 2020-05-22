<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Recipe;
use App\Direction;
use App\IngredientRecipes;
use App\RecipeTag;
use App\Http\Resources\RecipesResource;
// use App\App\Http\Controllers\Log;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            // 'name' => 'required|name|exists:users,name',
            'password' => 'required',
            'email' => 'required|email|exists:users,email'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken($user->email . '-' . now());
            return response()->json([
                'token' => $token->accessToken,
                'user' => $user
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();
        $response = "You have been successfully logged out!";
        return response($response, 200);
    }

    public function register(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $token = $user->createToken($user->email . '-' . now());
        return response()->json([
            'token' => $token->accessToken,
            'user' => $user
        ]);
        
    }

    public function createform(Request $request)
    {
        // Log::info($request);
        $recipe = Recipe::create([
            'title' => $request['title'],
            'servings' => $request['servings'],
            'cooking_time' => $request['cooking_time'],
            'image' => $request['image'],
            'user_id' => $request['user_id']
        ]);

        $direction = Direction::create([
            'direction' => $request['direction'],
            'recipe_id' => $recipe->id
        ]);
        
        foreach ($request['ingredient'] as $ingredient) {
            $ingredientObject = IngredientRecipes::create([
                'recipe_id' => $recipe->id,                    
                'ingredient_id' => $ingredient['ingredient_id'],
                'quantity' => $ingredient['quantity']
            ]);
        }
        
        foreach ($request['tags'] as  $tag) {
            $tagArray = RecipeTag::create([
                'recipe_id' => $recipe->id, 
                'tag_id' => $tag['tag_id'],
            ]);
        }

        return new RecipesResource(Recipe::with(['user', 'tags', 'directions', 'ingredients'])->get());
   }
    public function updateform(Request $request, Recipe $recipe)
    {
        // Log::info($request);
        // $recipe->title = $request->title;
        $recipe->update([
            'title' => $request['title'],
            'servings' => $request['servings'],
            'cooking_time' => $request['cooking_time'],
            'image' => $request['image'],
            'user_id' => $request['user_id']
        ]);

        $direction = Direction::update([
            'direction' => $request['direction'],
            'recipe_id' => $recipe->id
        ]);
        
        foreach ($request['ingredient'] as $ingredient) {
            $ingredientObject = IngredientRecipes::update([
                'recipe_id' => $recipe->id,                    
                'ingredient_id' => $ingredient['ingredient_id'],
                'quantity' => $ingredient['quantity']
            ]);
        }
        
        foreach ($request['tags'] as  $tag) {
            $tagArray = RecipeTag::update([
                'recipe_id' => $recipe->id, 
                'tag_id' => $tag['tag_id'],
            ]);
        }

        return new RecipesResource(Recipe::with(['user', 'tags', 'directions', 'ingredients'])->get());
   }

}