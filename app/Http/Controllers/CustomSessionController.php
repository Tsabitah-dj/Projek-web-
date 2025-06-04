<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomSessionController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('Dashboard')->with('success', 'Anda sudah login');
        }
        return view('login.index');
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect('/')->with('success', 'Anda sudah login');
        }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('Dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect('/login')->with('error', 'Username dan password tidak valid')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil Logout');
    }
}
