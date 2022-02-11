<?php

namespace App\Http\Controllers\Supporter;

use App\Models\Tag;
use App\Models\Meeting;
use App\Models\Session;
use App\Models\Supporter;
use App\Http\Controllers\Supporter\Mail\RegisterMail;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Jobs\RegisteredMail;


class SupporterProfileController extends Controller
{
    public function index()
    {


        return view('supporter.profile.index',[
            // auth()->user()=今ログイン中のモデル
            //ユーザーが持つsessionを取得
            //first() =登録された一番最初のもの 
            'session' => auth()->user()->sessions->first()

            
        ]);
    }

    public function create(Supporter $id)
    {
        $meetings = Meeting::orderBy('start_at')->get();
        $session = Supporter::find($id);
        // $tags = Tag::orderBy('name')->get();
        return view('supporter.profile.create', compact( 'session', 'meetings'));     
           

    }

    public function store(Session $id)
    {
        $attributes = request()->validate([
            // 'supporter_id' => 'required',
            // 'name' => 'required',
            'company_name' => 'required',
            'title' => 'required',
            // 'slug' => ['required', Rule::unique('sessions', 'slug')->ignore($session)],
            'supporter_image' => 'required|image',
            'good_todo' => 'required',
            'recommend_todo' => 'required',
            'reward_work' => 'required',
            'solve_complex' => 'required',
            'last_message' => 'required',
            'start_at' => 'required',
            // 'job_tag' => 'required',
            // 'advice_tag' => 'required',
            // preg_match_all()
            // dd(request())

        ]);
        // ddd($attributes);

        $attributes['supporter_id'] =  auth()->user()->id; 
        $attributes['supporter_image'] = request()->file('supporter_image')->store('supporter_images');
        // $attributes['supporter_image'] = array_merge('start_at', 'job_tag', 'advice_tag');
        // dd($attributes);
        // 'start_at' = toArray(); 
        Session::create($attributes);
        // ddd($attributes);
        //非同期に送信
        $supporter = Supporter::findOrFail(Auth::id());
        $name = $supporter['name'];
        $email = $supporter['email'];
        // dd($session);

        Mail::send(new RegisterMail($name, $email));
        // $session->tags()->attach(request()->job_tag);
        return redirect()
        ->route('supporter.profile.detail', Auth()->user()->id)
        ->with('success', 'プロフィールを作成しました！残りの情報はマイページから追加して下さい！');
    
    }

    public function edit($id)
    {     
        $session = Session::find($id);     
        if ($session == NULL){
            $tags = Tag::orderBy('id')->get();
            return redirect()
            ->route('supporter.profile.create');

        }


        return view('supporter.profile.edit', [
            // $tags = Tag::orderBy('name'),
            'session' => $session
            // 'tags' => $tags
        ]);

       
    }

     public function update(Session $session)
     {
        $attributes = request()->validate([
            'name' => 'required',
            // ddd($session),
            'company_name' => 'required',
            'title' => 'required',
            // 'slug' => ['required', Rule::unique('sessions', 'slug')->ignore($session)],
            'good_todo' => 'required',
            'recommend_todo' => 'required',
            'reward_work' => 'required',
            'solve_complex' => 'required',
            'last_message' => 'required',
            // 'start_at' => 'required',
            // 'job_tag' => 'required',
            // 'advice_tag' => 'required',
            // 'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if(isset($attributes['supporter_image'])){
            $attributes['supporter_image'] = request()->file('supporter_image')->store('supporter_images');
        } 
        // ddd($attributes);

        $session->update($attributes);

        return back()->with('success', 'プロフィールを更新しました！充実させていただきありがとうございます！');

     }

     public function destroy(Session $session)
     {
         $session->delete();

        return back()->with('success', 'プロフィール削除しました。');
     }


}
