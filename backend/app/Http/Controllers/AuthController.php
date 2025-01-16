<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $admin = Auth::user();
            $token = $admin->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'data' => [
                    'token' => $token,
                    'admin' => $admin,
                ],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials',
        ], 401);
    }
    
    public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'status' => 'success',
        'message' => 'Logout successful',
    ]);
}

}
