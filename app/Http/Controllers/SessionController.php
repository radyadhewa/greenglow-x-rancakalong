<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    function index()
    {
        return view("login");
    }

    function login(Request $request)
    {
        Session::flash('Username', $request->Username);
        $request->validate([
            'Username' => 'required',
            'Password' => 'required'
        ], [
            'Username.required' => 'Username wajib diisi',
            'Password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'Username' => $request->username,
            'Password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // kalau sukses
            return redirect('index');
            // return 'sukses';
        } else {
            // kalau gagal
            // return 'gagal';
            return redirect('index');
        }
    }

    function register()
    {
        return view('regist');
    }
    function create(Request $request)
    {
        Session::flash('Username', $request->Username);
        Session::flash('Email', $request->Email);
        $request->validate([
            'Username' => 'required',
            'Email' => 'required|email|unique:users',
            'Password' => 'required|min:6'
        ], [
            'Username.required' => 'Nama wajib diisi',
            'Email.required' => 'Email wajib diisi',
            'Email.Email' => 'Silakan masukkan Email yang valid',
            'Email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
            'Password.required' => 'Password wajib diisi',
            'Password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => Hash::make($request->Password)
        ];

        return redirect('/');

        // User::create($data);
    }
}
