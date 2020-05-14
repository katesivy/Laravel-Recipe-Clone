<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|username|exists:users,username',
            'password' => 'required'
            // 'email' => 'required|email|exists:users,email',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken($user->username . '-' . now());
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

}