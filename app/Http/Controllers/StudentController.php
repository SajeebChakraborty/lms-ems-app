<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students=User::where('is_admin',0)->paginate(5);
        return view('admin.students.index',compact('students'));
    }
}
