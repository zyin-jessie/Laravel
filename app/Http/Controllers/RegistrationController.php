<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'firstName' => [
                'required',
                'regex:/^[A-Za-z]+(?: [A-Za-z]+)?$/'
            ],
            'lastName' => [
                'required',
                'regex:/^[A-Za-z]+(?: [A-Za-z]+)?$/'
            ],
            'middleInitial' => [
                'nullable',
                'alpha',
                'max:1'
            ],
            'email' => [
                'required',
                'email'
            ],
            'password' => [
                'required',
                'string',
                'min:6',
                'max:20',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ],
            'confirm_password' => [
                'required',
                'same:password'
            ],
            'contact' => [
                'required',
                'numeric',
                'digits:11',
                'regex:/^09[0-9]{9}$/'
            ],
            'college' => [
                'required',
            ],
            'program' => [
                'required',
            ],
        ],
        [
            'firstName.required' => 'This field is required.',
            'lastName.required' => 'This field is required.',
            'confirm_password.same' => 'Password does not match.'
        ]);

        $summary = $request->only([
            'firstName',
            'lastName',
            'middleInitial',
            'email',
            'contact',
            'college',
            'program'
        ]);

        return view('summary', compact('summary'));
    }
}
