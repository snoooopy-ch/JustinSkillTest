<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
        $this->authorize('view_students');

        $students = Student::all();

        return view('students.index', compact('students'));
    }
}