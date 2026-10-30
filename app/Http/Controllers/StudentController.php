<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = \App\Models\Student::all();
        return view('students.index', compact ('students'));
    }

    public function store(Request $request)
    {
        \App\Models\Student::create($request->only([
            'firstname',
            'middlename',
            'lastname',
            'contact_number',
            'course',
            'year'
        ]));

        return redirect('/students');
    }
}
