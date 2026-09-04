<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showLoginForm()
    {
        $title = "Login";
        return view('admin.auth.login', compact('title'));
    }

    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }

    function logout()
    {
        auth()->logout();
        return redirect()->route('auth.login');
    }
}
