<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Login()
    {

        return view('login');
    }

    public function Authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return  response()->json([
                "status" => true,
                "redirect" => url("/")
            ]);
        } else {
            return  response()->json([
                "status" => false,
                "error" => "Invalid credentials. Please try again."
            ]);
        }

    }
    public function Register()
    {

        return view('signup');
    }
    public function Create(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        }
        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'role' => 'user',
            'password' => Hash::make($data['password'])

        ]);

        return response()->json([
            "status" => true,
            "redirect" => url("login")
        ]);
    }
}
