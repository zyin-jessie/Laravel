<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SummaryController extends Controller
{
    public function index()
    {
        $summary = Student::all();
        return view('summary', compact('summary'));
    }
    
}
