<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllStudents()
    {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200);
    }

    public function createStudent(Request $req)
    {
        $student = new Student;
        $student->name = $req->name;
        $student->course = $req->course;
        $student->save();

        return response()->json(['message' => 'Student created!'], 201);
    }

    public function getStudent($id)
    {
        if (Student::where('id', $id)->exists()) {
            $student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($student, 201);
        }
        return response()->json(['message' => 'student not found!', 404]);
    }

    public function updateStudent(Request $req, $id)
    {
    }

    public function deleteStudent($id)
    {
    }
}
