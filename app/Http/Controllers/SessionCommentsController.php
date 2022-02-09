<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Comment;
use App\Models\Student;

use Illuminate\Http\Request;

class SessionCommentsController extends Controller
{
    //
    public function store(Session $session)
    {
        //validation
        request()->validate([
            'body' =>  'required',

        ]);

        // dd(Auth()->user()->id);

        $session->comments()->create([
            'session_id' => 1,
            'student_id' => Auth()->user()->id,
            'body'=> request('body'),
            // dd(request())
        ]);
        // dd(request());



        return back();
    }
}
