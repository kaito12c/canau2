<?php

namespace App\Http\Controllers\Supporter;

use App\Models\Tag;
use App\Models\Session;
use App\Models\Category;
use App\Models\Supporter;
use App\Mail\RegisterMail;
use App\Jobs\RegisteredMail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Facade\FlareClient\Http\Response;

class SupporterSessionController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('id')->get();
        // $this->authorize('admin');
        return view('supporter.sessions.index',[
            'sessions' => 
                Session::latest() //'advise_day'
                    // ->filter(request(['search', 'category', 'supporter']))
                    ->paginate(15),
            'tags' => $tags


        ]);
    }

    public function detail(Session $id)
    {


        $session = Session::find($id);
        // return [
        //     $session => 'nullable',
        //     $session->first()->start_at => 'nullable',
        //     $session->first()->comments => 'nullable',

        // ];
        if(is_null($session)){
            return redirect(route('supporter.sessions'))->with('success', 'データがありません。');
        }
        $tags = Tag::orderBy('id')->get();

        return view('supporter.profile.detail',  [
            'session' => $session,
            // 'supporter' => $session->supporter->first(),
            'tags' =>  $tags
        ]);
    }

    public function show()
    {
        $tags = Tag::orderBy('id')->get();

        $sessions = Session::all();
        return view('supporter.profile.all-sessions',[
            'sessions' => $sessions ,
            'tags' =>  $tags
        ]);
    }



}
