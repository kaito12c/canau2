<?php

namespace App\Http\Controllers\Supporter;

use App\Models\Tag;
use App\Models\Meeting;
use App\Models\Session;
use App\Models\Supporter;
use App\Mail\RegisterMail;
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

    public function create()
    {
        $meetings = Meeting::orderBy('start_at')->get();
        $session = auth()->user()->first();
        $supporters  = Supporter::get();
        $tags = Tag::orderBy('name')->get();
        return view('supporter.profile.create', compact('tags', 'session', 'meetings', 'supporters'));     
           

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
        ->route('supporter.sessions.detail', Auth()->user()->id)
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
            'supporter_image' => 'required', 'image',
            'good_todo' => 'required',
            'recommend_todo' => 'required',
            'reward_work' => 'required',
            'solve_complex' => 'required',
            'last_message' => 'required',
            'start_at' => 'required',
            'job_tag' => 'required',
            'advice_tag' => 'required',
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


    public function attributes()
    {
        return [
            'name' => '名前',
            'birthday' => '誕生日',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            //基本情報
            'birth_where' =>  '出身',
            'now_where' =>  '居住地',
            'supporter_image' =>  'トップ画',
            'company_name' => '会社名',
            'title' =>  '肩書き',
            //中学時代
            'jhs_name' => '学校名',
            'jhs_club' => '部活動',
            'jhs_activities' => '課外活動',
            //高校時代
            'hs_name' => '学校名',
            'hs_course' => 'コース',
            'hs_club' => '部活動',
            'hs_activities' => '課外活動',
            //大学時代
            'uni_name' => '大学名',
            'uni_course' =>'学部名',
            'uni_activities' =>  '課外活動',
            'uni_work' =>  'アルバイトやインターン',
            //一言Q&A
            'recommend_book'  => 'オススメ本',
            'recommend_movie' =>  'オススメ映画',
            'recommend_youtube' =>  'オススメYouTube',
            'recommend_spot' =>  'オススメスポット',
            'refresh' =>  'オススメ気分転換方法',
            //中高時代の振り返りQ&A
            'good_todo' =>  'Q1.中高時代にやってよかったと思うことは何ですか？',
            'recommend_todo' =>  '高校生の時にやっておけばよかったと思うことは何ですか？',
            'myself_message' =>  'Q3.今、高校１年生（16歳）の自分にメッセージを伝えるとしたら？',
            //「働く」を切り取るQ&A
            'why_now_work'  => 'Q4.今の仕事を選んだきっかけは？？',
            'what_work' =>  'Q5.あなたにとって「働く」とは？',
            'reward_work' =>  'Q6.働いていてやりがいを感じる瞬間は殿ような瞬間ですか？',
            //価値観深掘りQ&A
            'solve_complex'  => 'Q7.過去にあった悩み・コンプレックスはどう解決してきましたか？',
            'change_myself'  => 'Q8.「これに出会って自分は変わった！」と思えるもの（人）は何（誰）ですか？',
            '6month_todo' =>  'Q9.あなたが、あと６ヶ月しか生きられないとしたら何をしますか？',
            'todo_till_death' =>  'Q10.死ぬまでに実現したいことは？',
            'last_message' => '最後に、進路に悩む10代にメッセージを',
    
        ];
    }
}
