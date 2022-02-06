<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionCommentsController extends Controller
{
    //
    public function store(Session $session)
    {
        //validation
        request()->validate([
            'body' =>  'required'
        ]);

        $session->comments()->create([
            'student_id' =>  request()->user()->id,
            'body'=> request('body')
        ]);

        return back();
    }
}
