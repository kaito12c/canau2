<?php

namespace App\Http\Controllers\Student;

use App\Models\Tag;
use App\Models\User;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    public function index()
    {
        return view('student.sessions.index',[
            // auth()->user()=今ログイン中のモデル
            //ユーザーが持つsessionを取得
            //first() =登録された一番最初のもの 
            'session' => auth()->user()->sessions->first()
        ]);
    }

    public function create()
    {
        
        return view('student.sessions.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            // 'name' => 'required',
            'company_name' => 'required',
            'title' => 'required',
            // 'slug' => ['required', Rule::unique('sessions', 'slug')->ignore($session)],
            'supporter_image' => 'required|image',
            'good_todo' => 'required',
            'recommend_todo' => 'required',
            'reward_work' => 'required',
            'solve_complex' => 'required',
            'last_message' => 'required'
        ]);
        // ddd($attributes);

            $attributes['supporter_id'] = auth()->id();
            $attributes['supporter_image'] = request()->file('supporter_image')->store('supporter_images');
            
        Session::create($attributes);

        return redirect('/student/sessions')->with('success', 'プロフィールを作成しました！ありがとうございます！');
    
    }

    public function edit(Session $session)
    {   
        // ddd($session);
        // $session = Session::find($id);
        return view('student.sessions.edit', [
            $tags = Tag::orderBy('id'),
            'session' => $session,
            'tags' => $tags
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
            'supporter_image' => 'required', 'image',
            'good_todo' => 'required',
            'recommend_todo' => 'required',
            'reward_work' => 'required',
            'solve_complex' => 'required',
            'last_message' => 'required',
            // 'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if(isset($attributes['supporter_image'])){
            $attributes['supporter_image'] = request()->file('supporter_image')->store('supporter_images');
        }       
        $session->update($attributes);

        return back()->with('success', 'プロフィールを更新しました！充実させていただきありがとうございます！');

     }

     public function destroy(Session $session)
     {
         $session->delete();

        return back()->with('success', 'プロフィール削除しました。');
     }

    
}
