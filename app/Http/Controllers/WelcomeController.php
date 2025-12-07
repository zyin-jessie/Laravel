<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(String $name)
    {
        $request = [
            "name" => $name
        ];
        return view('display', compact('request'));
    }
}