<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showMessage() {
        // return "Hello, this is a basic controller!";
        return view('test');
    }
    public function showName(string $name) {
        // return "Hi, I'm " . $name;
        $name = [
            "name" => $name
        ];
        return view('basic', compact('name'));
    }
}