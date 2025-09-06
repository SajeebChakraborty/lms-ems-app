<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function create()
    {
        $students=User::where('is_admin',0)->get();
        $subjects=Subject::all();

        return view('admin.mark.create',compact('students','subjects'));
    }
    public function store(Request $request)
    {
        Mark::create([
            'student_id'=>$request->student_id,
            'subject_id'=>$request->subject_id,
            'marks'=>$request->marks
        ]);
         return redirect()->route('result.index');
    }
}
