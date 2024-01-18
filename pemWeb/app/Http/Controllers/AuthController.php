<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {   
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $messages = [
            'required' => ':attribute harus di isi guys!!!',
            'min' => ':attribute harus di isi minimal 5 huruf ya',
            'max' => ':attribute harus di isi maksimal 8 ya',
            'email' => ':attribute harus di isi dengan email ya'
        ];

        $this->validate($request, [
            'email' => 'required|email|min:5',
            'password' => 'required|max:8'
        ],$messages);

        if ($request->input('email') == 'admin@gmail.com' && $request->input('password') == 'admin') {
        // Login berhasil
            auth()->loginUsingId(1); // Menggantikan dengan logika pengguna yang sesuai
            return redirect('/');
        } else {

        // Login gagal
            return back()->with('error', 'Login gagal. Coba lagi.');
        }
    }
}
