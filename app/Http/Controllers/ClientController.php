<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ClientController extends Controller
{
    public function student(Request $request) {
        $search = $request->input('nisn');
    
        $data = Student::where('nisn', 'like', '%'.$search.'%')->first();
    
        return view('student')->with('data', $data);
    }
}
