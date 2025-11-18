<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuerybuilderController extends Controller
{
    public function index(){
      return DB::table('employees')->get();
    }
}
