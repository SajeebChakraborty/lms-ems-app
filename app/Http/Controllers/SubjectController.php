<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects=Subject::paginate(5);
        return view('common.subject.index',compact('subjects'));
    }
}
