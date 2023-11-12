<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Throwable;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email'      => 'required|email',
                'password'   => 'required',
                'token_name' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => $validator->errors()->first(),
                    'status'  => 422,
                ], 422);
            }

            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status'  => 401,
                    'message' => 'These credentials do not match our records.',
                ], 401);
            }

            $user = User::find(auth()->id());
            $tokenResult = $user->createToken($request->token_name)->plainTextToken;
            return response()->json([
                'data'    => [
                    'accessToken' => [
                        'token' => $tokenResult,
                        'type'  => 'Bearer',
                    ],
                    'user'        => $user,
                ],

                'message' => 'User successfully logged in',
                'status'  => 200,
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'status'  => 500,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => ['required', Password::defaults()],
            ]);
            if ($validation->fails()) {
                return response()->json([
                    'message' => $validation->errors()->first(),
                    'status'  => 422,
                ], 422);
            }
            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'data'    => $user,
                'message' => 'User successfully Registered',
                'status'  => 200,
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status'  => 500,
            ], 500);
        }
    }

    public function logout()
    {
        try {
            $user = User::find(auth()->id());
            $user->tokens()->delete();
            return response()->json([
                'status'  => 200,
                'message' => 'User Logged out Successfully',
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'status'  => 500,
                'message' => $e->getMessage(),
            ], 503);
        }
    }

    public function user(Request $request)
    {
        try {
            return response()->json([
                'data'    => $request->user(),
                'message' => 'User successfully retrieved',
                'status'  => 200,
            ], 200);
        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'status'  => 500,
            ], 500);
        }
    }
}
