<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "<h1>This will return the INDEX function from StudentController</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "<h1>This will return the CREATE function from StudentController</h1>";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "<h1>" . "This will SHOW the record pass in parameter is " . " - " . $id . " </h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "<h1>" . "This will EDIT the record pass in parameter is " . " - " . $id . " </h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}