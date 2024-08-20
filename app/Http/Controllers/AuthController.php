<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function showWelcomePage(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        return view('welcome', [
            'first_name' => $first_name,
            'last_name' => $last_name
        ]);
    }
}
