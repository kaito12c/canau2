<x-app-layout>
    {{-- ：がないと、文字列、あるとPHPになる --}}
    <x-setting heading="自分史編集"  :session="$session">
        <form action="/supporter/profile/{{ $session->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="bg-blue-50 my-6 p-3 text-left rounded-xl"> 
                <div class="font-bold text-xl my-2">プロフィール</div>
                <x-profile-topic>基本情報</x-profile-topic>
                <x-form.input name="name"  placeholder="山田 叶" :value="old('name', $session->supporter->name)"/>
                <x-form.input name="company_name"  placeholder="株式会社canau" :value="old('company_name', $session->company_name)"/>
                <x-form.input name="title"  placeholder="代表取締役" :value="old('title', $session->title)"/>
                <div class="flex mt-6 mx-2">
                    <div class="flex-1">
                    <x-form.input name="supporter_image" type="file" :value="old('supporter_image', $session->supporter_image)"/>
                    </div>
                    <img src="{{ asset('storage/' . $session->supporter_image) }}" alt="" class="rounded-xl" width="150">
                </div> 
                <x-form.input name="birth_where"  placeholder="代表取締役" :value="old('birth_where', $session->birth_where)"/>
        
                <x-profile-topic>中学校時代<span class="text-xs"> (覚えている範囲で構いません！)</span></x-profile-topic>
                <x-form.input name="jhs_name"  placeholder="代表取締役" :value="old('jhs_name', $session->jhs_name)"/>
                <x-form.input name="jhs_club"  placeholder="代表取締役" :value="old('jhs_club', $session->jhs_club)"/>
                <x-form.input name="jhs_activities"  placeholder="代表取締役" :value="old('jhs_activities', $session->jhs_activities)"/>
                <x-profile-topic>高校時代</x-profile-topic>
                <x-form.input name="hs_name"  placeholder="代表取締役" :value="old('hs_name', $session->hs_name)"/>
                <x-form.input name="hs_course"  placeholder="代表取締役" :value="old('hs_course', $session->hs_course)"/>
                <x-form.input name="hs_club"  placeholder="代表取締役" :value="old('hs_club', $session->hs_club)"/>
                <x-form.input name="hs_activities"  placeholder="代表取締役" :value="old('hs_activities', $session->hs_activities)"/>
                <x-profile-topic>大学時代</x-profile-topic>
                <x-form.input name="uni_name"  placeholder="代表取締役" :value="old('uni_name', $session->uni_name)"/>
                <x-form.input name="uni_course"  placeholder="代表取締役" :value="old('uni_course', $session->uni_course)"/>
                <x-form.input name="uni_activities"  placeholder="代表取締役" :value="old('uni_activities', $session->uni_activities)"/>
                <x-form.input name="uni_work"  placeholder="代表取締役" :value="old('uni_work', $session->uni_work)"/>
            </div>
            <div>
                <x-answer-topic>中高時代振り返りQ&A</x-answer-topic>
                <x-form.textarea name="good_todo"  placeholder="代表取締役" :value="old('good_todo', $session->good_todo)"/>
                <x-form.textarea name="recommend_todo"  placeholder="代表取締役" :value="old('recommend_todo', $session->recommend_todo)"/>
                <x-form.textarea name="myself_message"  placeholder="代表取締役" :value="old('myself_message', $session->myself_message)"/>
                <x-answer-topic>「働く」を切り取るQ&A</x-answer-topic>
                <x-form.textarea name="why_now_work"  placeholder="代表取締役" :value="old('why_now_work', $session->why_now_work)"/>
                <x-form.textarea name="what_work"  placeholder="代表取締役" :value="old('what_work', $session->what_work)"/>
                <x-form.textarea name="reward_work"  placeholder="代表取締役" :value="old('reward_work', $session->reward_work)"/>
                <x-answer-topic>「働く」を切り取るQ&A</x-answer-topic>
                <x-form.textarea name="solve_complex"  placeholder="代表取締役" :value="old('solve_complex', $session->solve_complex)"/>
                <x-form.textarea name="change_myself"  placeholder="代表取締役" :value="old('change_myself', $session->change_myself)"/>
                <x-form.textarea name="6month_todo"  placeholder="代表取締役" :value="old('6month_todo', $session->six_month_todo)"/>
                <x-form.textarea name="todo_till_death"  placeholder="代表取締役" :value="old('todo_till_death', $session->todo_till_death)"/>
                <x-form.textarea name="last_message"  placeholder="代表取締役" :value="old('last_message', $session->last_message)"/>
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




            
            <div class="flex">
            <x-form.button>更新</x-form.button>
        </form>

            {{-- <form action="/admin/sessions/{{ $session->id }}" method="post">
                @csrf
                @method('DELETE')
                <button
                class="mt-6 inline-flex items-center px-8 py-2 text-xs text-gray-500"
                >
                プロフィールを削 除
                </button>
            </form> --}}


    </x-setting>

</x-app-layout>