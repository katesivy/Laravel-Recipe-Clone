<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Recipe;
// use App\App\Http\Controllers\Log;
use Illuminate\Support\Facades\Log;


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
            // $token = $user->createToken($user->email . '-' . now());
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
        return response($response, 200);
    }

    public function createform(Request $request)
    {
        // Log::info($request);
        $this->validate(request(), [
            // 'title' => 'required',
            // 'ingredient' => 'required',
            // 'direction' => 'required',
            // 'quantity' => 'required',
            // 'servings' => 'required',
            // 'cooking_time' => 'required',
            // 'image' => 'required',
            // 'tags' => 'required',
        ]);

        Log::info($request);
        $recipe = Recipe::create([
            'title' => $request['title'],
            // 'ingredient' => $request['ingredient'],
            // 'direction' => $request['direction'],
            // 'quantity' => $request['quantity'],
            'servings' => $request['servings'],
            'cooking_time' => $request['cooking_time'],
            'image' => $request['image'],
            // 'tags' => $request['tags'],
            'user_id' => 1
            ]);
       
        return response("OK", 200);
    }

}