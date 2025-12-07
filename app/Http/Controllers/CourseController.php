<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = [
            [
                "coursecode" => "IT001",
                "coursedescription" => "Java Programming"
            ],
            [
                "coursecode" => "IT002",
                "coursedescription" => "PHP Programming"
            ],
            [
                "coursecode" => "IT003",
                "coursedescription" => "Laravel Programming"
            ]
        ];

        return view('/course', compact('courses'));
    }
}