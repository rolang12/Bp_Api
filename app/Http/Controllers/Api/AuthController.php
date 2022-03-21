<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthController as ResourcesAuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
   
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (!auth()->attempt($credentials) ) {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }

        $user = User::whereEmail($request->email)->firstOrFail();

        $token = $user->createToken('auth-token');

        $resource = new ResourcesAuthController($user);

        $resource->additional(['token' => $token->plainTextToken, 'user' => $user ]);
                                                
        return $resource;

    }

    public function register(Request $request)
    {
        // return $request;
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $created = User::create($credentials);
        
        $created = new ResourcesAuthController($created);

        return $created;

    }

    public function logout (User $user ) {
        
        $user->tokens()->delete();

        return response(['message' => 'You have been successfully logged out.'], 200);
    }


}
