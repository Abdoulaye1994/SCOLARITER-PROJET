<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('Students.list');
    }


        public function creaate(){
            return view('Students.create');
        }

    public function edit(Student $student){
        return view('Students.edit' , compact('student'));
    }

    public function show(Student $student){
        return view('Students.show' , compact('student'));
    }
}
