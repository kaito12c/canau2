<?php

namespace App\Http\Controllers\Student;

use App\Models\Session;
use App\Models\Student;
use App\Models\Category;
use App\Models\Supporter;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Student\Mail\SessionToSupporterMail;
use Illuminate\Support\Facades\Mail;
use Facade\FlareClient\Http\Response;

class StudentSessionController extends Controller
{
    public function index()
    {

        // $this->authorize('admin');
        return view('student.profile.index',[
            'sessions' => 
                Session::latest('start_at')
                    // ->filter(request(['search', 'category', 'supporter']))
                    ->paginate(15),
    
        ]);
    }

    

    public function detail(Session $id)
    {
        $student = Student::findOrFail(Auth()->user()->id);
        $session = Session::find($id);
        if(is_null($session)){
            return redirect(route('student.sessions'))->with('success', 'データがありません。');
        }
        // dd($id);
        
        return view('student.profile.detail',  ['session' => $session, 'student' => $student]);
    }

    public function show()
    {
        $sessions = Session::all();
        return view('student.sessions.all-sessions',[
            'sessions' => $sessions
        ]);
    }

    public function resister(Session $id)
    {
        $student = Student::findOrFail(Auth()->user()->id);
        $StuName = $student['name'];
        $StuEmail = $student['email'];
        $SupName = $id->supporter['name'];
        $SupEmail = $id->supporter['email'];
        $title = $id['title'];
        $start_at = $id['start_at'];
        $company_name = $id['company_name'];


        Mail::send(new SessionToSupporterMail($StuName, $StuEmail, $SupEmail, $SupName, $title, $start_at, $company_name, $id));


        return back()->with('success', '進路相談を申し込みました！');

    }

    public function store(Session $session)
    {
        //validation
        request()->validate([
            'body' =>  'required'
        ]);

        return [
            $session->first()->start_at => 'nullable|email',
        ];

        $session->comments()->create([
            'session_id' =>  request()->user()->id,
            'student_id' =>  request()->user()->id,
            'body'=> request('body')
        ]);

        return back();
    }

}
