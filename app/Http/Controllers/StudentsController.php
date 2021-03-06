<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create(Request $request)
    {
        $record = [
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'email' => $request->get('email')
        ];
        $student = Student::create($record);
        $students = Student::all();
        return response()->json($students);
    }

    public function getStudents(){
        $students = Student::all();
        return response()->json($students);
    }

    public function updateStudent(Request $request) {    
        $record = [
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
             'email'=>$request->get('email')
        ];
        
        $id = request()->route()->parameter('id'); 
        $student = Student::where('id','=', $id)->update($record);       
        return response()->json($student);          
    }

    public function deleteStudent() {
        $id = request()->route()->parameter('id');
        $student = Student::find($id)->delete();
        return response()->json($student); 
    }
}
