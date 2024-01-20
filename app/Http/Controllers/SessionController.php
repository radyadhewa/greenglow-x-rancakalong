<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;


class SessionController extends Controller
{
    // PROSES PEMANGGILAN FORM AWAL
    function LoginForm()
    {
        return view("auth.login");
    }
    function RegisterForm()
    {
        return view('auth.regist');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $validasi = $request-> only('email', 'password');
        if (Auth::attempt($validasi)) {
            return redirect(RouteServiceProvider::HOME);
        }

        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    function register(Request $request)
    {

        $request->validate([ 
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.Email' => 'Silakan masukkan Email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

         event(new Registered($user));

         return redirect()->route('login');
    }
}
