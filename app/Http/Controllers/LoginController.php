<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        // echo $_POST['name'];
        // echo "<br>";
        // echo $_POST['email'];
        // echo "<br>";
        // echo $_POST['password'];

        // dd($request->all());

        $request->validate([
            'name' => [
                'required',
                'alpha'
            ],
            'email' => [
                'required',
                'email'
            ],
            'password' => [
                'required',
                'min:6',
                'max:10'
            ]
        ],
        [
            'name.required' => 'Attention: Username is required to continue!',
            'name.alpha' => 'Attention: Username accept letters only to continue!',
            // 'email.required' => 'Attention: Valid email is required to continue!'
        ]);

        $accounts = $request->only(['email', 'password']);

        return view('dashboard', compact('accounts'));

        // return $request;
    }
}
