<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $students = [
            [
                "id" => 1001,
                "fullname" => "John Smith",
                "email" => "johnsmith@gmail.com"
            ],
            [
                "id" => 1002,
                "fullname" => "Jane Doe",
                "email" => "janedoe@gmail.com"
            ],
            [
                "id" => 1003,
                "fullname" => "James King",
                "email" => "jamesking@gmail.com"
            ]
        ];

        return view('/home', compact('students'));
    }
}