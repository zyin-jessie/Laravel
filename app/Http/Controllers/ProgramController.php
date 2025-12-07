<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
   public function index() {
        $programs = [
            [
                "programcode" => "BSIT",
                "programdescription" => "Bachelor of Science in Information Technology"
            ],
            [
                "programcode" => "BSIS",
                "programdescription" => "Bachelor of Science in Information System"
            ],
            [
                "programcode" => "BSCS",
                "programdescription" => "Bachelor of Science in Computer Science"
            ]
        ];

        return view('/program', compact('programs'));
    }
}