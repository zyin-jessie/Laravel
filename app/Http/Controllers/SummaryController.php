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

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'first_name' => [
                'required',
                'regex:/^[A-Za-z]+(?: [A-Za-z]+)?$/'
            ],
            'last_name' => [
                'required',
                'regex:/^[A-Za-z]+(?: [A-Za-z]+)?$/'
            ],
            'middle_initial' => [
                'nullable',
                'alpha',
                'max:1'
            ],
            'email' => [
                'required',
                'email'
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
            'lastName.required' => 'This field is required.'
        ]);

        $student->update($validatedData);

        return redirect()->route('summary');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('summary');
    }

}
