<x-app-layout>
    {{-- ：がないと、文字列、あるとPHPになる --}}
    <x-setting heading="自分史編集"  :session="$session">
        <form action="{{ route('supporter.profile. update', $session->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="bg-blue-50 my-6 p-3 text-left rounded-xl"> 
                <div class="font-bold text-xl my-2">プロフィール</div>
                <div class="text-xs">※全てを入力する必要はありません。</div>
                <x-profile-topic>基本情報</x-profile-topic>
            
                <x-form.input name="name" label="名前" placeholder="山田 叶" :value="old('name', $session->supporter->name)"/>
                <x-form.input name="company_name"  label="所属先" placeholder="株式会社canau" :value="old('company_name', $session->company_name)"/>
                <x-form.input name="title"  label="肩書き" placeholder="代表取締役" :value="old('title', $session->title)"/>
                <div class="flex mt-6 mx-2">
                    <div class="flex-1 mr-6">
                    <x-form.input name="supporter_image"  label="プロフィール画像"  type="file" :value="old('supporter_image', $session->supporter_image)"/>
                    </div>
                    <img src="{{ asset('storage/' . $session->supporter_image) }}" alt="" class="rounded-xl" width="150">
                </div> 
                <div class="flex mr-6">
                    <div class="flex mr-6">
                        <x-form.input name="birth_where" class="py-2" label="生まれたところ" placeholder="北海道札幌市" :value="old('birth_where', $session->birth_where)"/>
                    </div>
                    <div class="flex mr-6">
                        <x-form.input name="now_where" label="住んでいることろ" placeholder="北海道札幌市" :value="old('now_where', $session->now_where)"/>
                    </div>
                </div>
                <x-profile-topic>中学校時代</x-profile-topic>
                <div class="flex mr-6">
                    <div class="mr-4">
                        <x-form.input name="jhs_name"  label="中学校名" placeholder="金宇中学校" :value="old('jhs_name', $session->jhs_name)"/>
                    </div>
                    <div class="mr-4">
                        <x-form.input name="jhs_club"  label="所属先" placeholder="茶道部" :value="old('jhs_club', $session->jhs_club)"/>
                    </div>
                    <div class="mr-4">
                        <x-form.input name="jhs_activities"  label="課外活動・習い事" placeholder="ダンス" :value="old('jhs_activities', $session->jhs_activities)"/>
                    </div>
                </div> 
            <x-profile-topic>高校時代</x-profile-topic>
            <div class="flex">
                <div class="mr-4">
                    <x-form.input name="hs_name"  label="高校名" placeholder="金宇高校" :value="old('hs_name', $session->hs_name)"/>
                </div>
                <div class="mr-4">
                    <x-form.input name="hs_course"  label="コース" placeholder="文系" :value="old('hs_course', $session->hs_course)"/>
                    </div>
            </div>
            <div class="flex">
                <div class="mr-4">
                    <x-form.input name="hs_club"  label="部活動" placeholder="吹奏楽部" :value="old('hs_club', $session->hs_club)"/>
                    </div>
                <div class="mr-4">
                    <x-form.input name="hs_activities"  label="課外活動・習い事" placeholder="TEDxでボランティア" :value="old('hs_activities', $session->hs_activities)"/>
                    </div>
            </div> 
            <x-profile-topic>大学時代</x-profile-topic>
            <div class="flex">
                <div class="mr-4">
                    <x-form.input name="uni_name"  label="大学名" placeholder="住処大学" :value="old('uni_name', $session->uni_name)"/>
                    </div>
                <div class="mr-4">
                    <x-form.input name="uni_course"  label="学部・学科" placeholder="文学部" :value="old('uni_course', $session->uni_course)"/>
                    </div>
            </div>
            <div class="flex">
                <div class="mr-4">
                    <x-form.input name="uni_activities"  label="課外活動（ボランティアなど）" placeholder="多世代交流イベント企画" :value="old('uni_activities', $session->uni_activities)"/>
                </div>
                <div class="mr-4">
                    <x-form.input name="uni_work"  label="アルバイト・インターン" placeholder="１週間リクルートでインターン" :value="old('uni_work', $session->uni_work)"/>
                </div>
            </div> 
        </div>
        <div>
            <x-answer-topic>中高時代振り返りQ&A</x-answer-topic>
            <x-form.textarea name="good_todo"  label="Q1.中高時代にやってよかったと思うことは？" placeholder="部活動を後悔ないくらいやりきったこと">{{ old('good_todo', $session->good_todo) }}</x-form.textarea>
            <x-form.textarea name="recommend_todo"  label="Q2.中高時代にやっておけばよかったことは？" placeholder="インターンをして仕事の経験を積みたかった">{{ old('recommend_todo', $session->recommend_todo) }}</x-form.textarea>
            <x-form.textarea name="myself_message"  label="Q3.高校１年生の自分にメッセージを送るとしたら何を伝える？" placeholder="もっと外へ出よう！学校だけが自分の世界じゃない。">{{ old('myself_message', $session->myself_message) }}</x-form.textarea>
            <x-answer-topic>「働く」を切り取るQ&A</x-answer-topic>
            <x-form.textarea name="why_now_work"  label="Q4.今の仕事をし始めたきっかけは？" placeholder="中高生にとって安心して挑戦できる環境が必要だと思ったから">{{ old('why_now_work', $session->why_now_work) }}</x-form.textarea>
            <x-form.textarea name="what_work"  label="Q5.あなたにとって「働く」とは？" placeholder="居場所づくり" >{{ old('what_work', $session->what_work) }}</x-form.textarea>
            <x-form.textarea name="reward_work"  label="Q6.働いていてやりがいを感じる瞬間はどのような瞬間ですか？" placeholder="頭の中にあるイメージが仲間と協力してカタチになったとき">{{ old('reward_work', $session->reward_work) }}</x-form.textarea>
            <x-answer-topic>「働く」を切り取るQ&A</x-answer-topic>
            <x-form.textarea name="solve_complex"  label="Q7.過去にあった悩み・コンプレックスはどう解決してきましたか？" placeholder="読書をたくさんして先人から知恵をいただきました。">{{ old('solve_complex', $session->solve_complex) }}</x-form.textarea>
            <x-form.textarea name="change_myself"  label="Q8.「これに出会って自分は変わった！」と思えるもの（人）は何（誰）ですか？" placeholder="『嫌われる勇気』を読んで見える世界が180度変わりました。">{{old('change_myself', $session->change_myself) }}</x-form.textarea>
            <x-form.textarea name="six_month_todo"  label="Q9.あなたが、あと６ヶ月しか生きられないとしたら何をしますか？" placeholder="canauが後世に残るよう全力を尽くします。" >{{old('six_month_todo', $session->six_month_todo)  }}</x-form.textarea>
            <x-form.textarea name="todo_till_death"  label="Q10.死ぬまでに実現したいことは？" placeholder="１つでも社会に開かれる学校を増やす。" >{{ old('todo_till_death') }}</x-form.textarea>
            <x-form.textarea name="last_message"  label="最後に、進路に悩む10代にメッセージを" placeholder="学校だけが世界じゃない。もっと面白い世界が学校の外にはあります。">{{ old('last_message', $session->last_message) }}</x-form.textarea>
            <x-profile-topic>マイタグ</x-profile-topic>
            <div class="text-xm py-5">Coming soon...</div>
                            {{-- <x-form.field>職種</x-form.field>
                @foreach ($tags  as $tag )
                      @if ($tag->sort_no == 1)
                      <div class="form-check form-check-inline inline-flex px-2 ">
                          <input 
                          type="checkbox"
                          name="job_tag[]"
                          value="{{ $tag->id }}{{ old('tag') == $tag->id ? 'selected' : ""}}"
                          id="{{ $tag->id }}"

                          >
                          <label for="{{ $tag->id }}" class="form-check-label text-xs px-1">{{ $tag->name }}</label>
                      </div>
                      <x-form.error name="{{ $tag->name }}" />
                      @endif
                  @endforeach --}}
                  

                      {{-- <x-form.field>得意な相談内容</x-form.field>
                      @foreach ($tags  as $tag )
                          @if ($tag->sort_no == 2)
                          <div class="form-check form-check-inline inline-flex px-2">
                              <input 
                              type="checkbox"
                              name="advice_tag[]"
                              value="{{ $tag->id }}{{ old('tag') == $tag->id ? 'selected' : ""}}"
                              id="{{ $tag->id }}"
                              >
                              <label for="{{ $tag->id }}" class="form-check-label text-xs px-1">{{ $tag->name }}</label>
                          </div>
                          <x-form.error name="{{ $tag->name }}" />

                          @endif
                      @endforeach --}}
        </div>

            {{-- <x-form.label name="生き方タグ"/>

        <select name="category_id" id="category_id" 
                class="rounded-md shadow-sm border-gray-300 
                        focus:border-indigo-300 focus:ring 
                        focus:ring-indigo-200 focus:ring-opacity-50 w-full p-1">
            @foreach (\App\models\Category::all() as  $category )
            <option value="{{ $category->id }}" 
                {{ old('catagory_id', $session->category_id) == $category->id ? 'selected' : '' }}
                >{{ ucwords($category->job_name) }}</option>
                
            @endforeach --}}
            {{-- <option value="like_talking">話すのが好き</option>
            <option vaalue="like_analize">分析が好き</option>
            <option value="like_smal_thing">細かい作業が好き</option>
            <option value="like_moving">体を動かすことが好き</option>
            <option value="like_educating">おせっかいが好き</option> 
        </select>--}}
            {{-- <x-form.error name="生き方"/>
        </x-form.field> --}}




        
        <x-form.button>更新</x-form.button>
    </form>



    </x-setting>

</x-app-layout>