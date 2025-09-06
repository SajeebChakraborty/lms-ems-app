<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index()
    {
        //if is admin
        if(Auth::user()->is_admin==1)
        {
            $marks=Mark::all();
        }
        else
        {
            $marks=Mark::where('student_id',Auth::user()->id)->get();
        }
        return view('common.result.index',compact('marks'));
    }
}
