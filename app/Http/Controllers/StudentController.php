<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // return Student::all();
        // $student = Student::find(4);



        // Example of inserting data using Eloquent

        // $student = new Student();
        // $student->first_name = "John";
        // $student->last_name = "Doe";
        // $student->middle_initial = "";
        // $student->email = "john.doe@example.com";
        // $student->password = bcrypt('password123');
        // $student->contact = "099287451349";
        // $student->college = "College of Informatics and Computer Science";
        // $student->program = "Information Technology";
        // $student->save();
        // dd('success insert');

        // Example of upadating data using Eloquent

        // $student = Student::find(13); // for Id
        // $student = Student::where('id', 13)->first();             // for columns
        // $student->first_name = "John";
        // $student->save();
        // dd('success update');

        // Example of deleting data using Eloquent

        // Student::find(14)->delete();
        // Student::findOrFail(14)->delete();
        // Student::where('id', 11)->delete();
        // dd('success delete');
        // return Student::onlyTrashed()->get();                     // Used to display soft deleted data
        // Student::withTrashed()->where('id', 3)->forceDelete();    // Used to delete permanently the data

        // Example of restoring Soft deleted data
        // Student::withTrashed()->where('id', 11)->restore();
        return Student::all();

    }
}
