<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Userapp;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function daftar()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return back();
        }

        $simpan = Userapp::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('login')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('home');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::guard('login')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
