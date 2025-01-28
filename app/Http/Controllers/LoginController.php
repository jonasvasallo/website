<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function loginRedirect(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        // PLACEHOLDER MUNA FOR AUTHENTICATION HASHSAHSAHASH
        if ($validated['email'] != 'admin@gmail.com' && $validated != 'password123') {
            return redirect()->back()->withErrors(['login_error' => 'Invalid email or password.']);
        }

        return redirect('/');
    }
}
