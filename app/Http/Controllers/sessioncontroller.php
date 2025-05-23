<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('Admin.sesi.index');
        
    }
    
    public function login(Request $request) {
        if (Auth::check()) {
            return redirect('/admin/layouts')->with('success', 'Anda sudah login');
        }
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)){
            return redirect('/admin/layouts')->with('success', 'Berhasil Login');
        } else {
            return redirect('/admin/layouts')->with('error', 'Username dan password tidak valid');
        }
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/admin/layouts')->with('success', 'Berhasil Logout');
    }
}
