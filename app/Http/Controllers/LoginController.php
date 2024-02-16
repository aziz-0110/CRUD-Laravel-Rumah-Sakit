<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login', [
            'title' => 'title',
        ]);
    }

    public function autenticate(Request $request)
    {
        $cardinal = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // if (Auth::attempt($cardinal)) {
        $request->session()->regenerate();
        return redirect()->intended('tindakan');
        // }

        return back()->with('loginErr', 'Login gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/tindakan');
    }
}
