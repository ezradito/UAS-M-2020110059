<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return response()->json(['message' => 'Signup successful']);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $data['username'])->first();

        if ($user && Hash::check($data['password'], $user->password)) {
            return response()->json(['message' => 'Login successful']);
        } else {
            return response()->json(['message' => 'Login failed'], 401);
        }
    }
}
