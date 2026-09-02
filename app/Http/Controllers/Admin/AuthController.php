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
}
