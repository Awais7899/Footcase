<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function Authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user(); // Retrieve the authenticated user
            if ($user->role == 'admin') {
                // User is an admin, redirect to admin panel
                return response()->json([
                    "status" => true,
                    "redirect" => url("/admins")
                ]);
            } else {
                // User is not an admin, handle accordingly
                return response()->json([
                    "status" => false,
                    "error" => "You don't have permission to access the admin panel."
                ]);
            }
        } else {
            return  response()->json([
                "status" => false,
                "error" => "Invalid credentials. Please try again."
            ]);
        }
    }
}
