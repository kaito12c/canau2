<?php

namespace App\Http\Controllers\Student;

use App\Models\Category;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;

class StudentSessionController extends Controller
{
    public function index()
    {

        // $this->authorize('admin');
        return view('student.sessions.index',[
            'sessions' => 
                Session::latest('advise_day')
                    // ->filter(request(['search', 'category', 'supporter']))
                    ->paginate(15),
    
        ]);
    }

    public function detail($id)
    {
        $session = Session::find($id);
        if(is_null($session)){
            return redirect(route('sessions'))->with('success', 'データがありません。');
        }

        return view('student.sessions.detail',  ['session' => $session]);
    }

    public function show()
    {
        $sessions = Session::all();
        return view('student.sessions.all-sessions',[
            'sessions' => $sessions
        ]);
    }

}
