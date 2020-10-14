<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    
    public function studenti() {

        $data = Student::all();

        return view('studenti', compact('data'));
        
    }

    public function show($id) {

        $students = Student::all();

        $student = $students->find($id);

        if(!$student) {
            abort(404);
        }

        return view('show', compact('student'));

    }

    public function slug($slug) {

        $students = Student::all();

        $student = $students->find($slug);

        if(!$student) {
            abort(404);
        }

        return view('slug',compact('student'));

    }

}
