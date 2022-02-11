<x-app-layout>
    <x-slot name="slot">

    <!doctype html>

    <title>canau-もっと気軽に進路相談を-</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <body style="font-family: Open Sans, sans-serif">
            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
                <article class="max-w-6xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                        <img src="../storage/{{ $session->first()->supporter_image }}" alt="" class="px-1 rounded-xl ">

                        {{-- <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>1 day ago</time>
                        </p> --}}

                        <div class="flex text-center lg:justify-center text-sm mt-4">
                            {{-- <img src="../images/lary-avatar.svg" alt="Lary avatar"> --}}
                            <div class="ml-3 text-center">
                                <h5 class="font-bold text-xl">{{ $session->first()->supporter->name }}</h5>
                                <h6>{{ $session->first()->company_name }}</h6>
                            </div>
                        </div>
                        <div class="bg-blue-50 my-6 p-3 text-left rounded-xl"> 
                            <div class="font-bold text-xl my-2">プロフィール</div>
                                <x-profile-topic>基本情報 </x-profile-topic>
                                <div class="text-sm pt-2">出身：{{ $session->first()->birth_where }}</div>
                                <div class="text-sm pt-2">居住地：{{ $session->first()->now_where }}</div>
                                <div class="text-sm pt-2">会社名：{{ $session->first()->company_name }}</div>
                                <div class="text-sm pt-2">肩書き：{{ $session->first()->title }}</div>
                                <x-profile-topic>中学時代</x-profile-topic>
                                <div class="text-sm pt-2">学校名：{{ $session->first()->jhs_name }}中学校</div>
                                <div class="text-sm pt-2">部活動：{{ $session->first()->jhs_club }}</div>
                                <div class="text-sm pt-2">習い事・課外活動：{{ $session->first()->jhs_activities }}</div>
                                <x-profile-topic>高校時代 </x-profile-topic>
                                <div class="text-sm pt-2">学校名：{{ $session->first()->hs_name }}</div>
                                <div class="text-sm pt-2">コース：{{ $session->first()->hs_course }}</div>
                                <div class="text-sm pt-2">部活動：{{ $session->first()->hs_club }}</div>
                                <div class="text-sm pt-2">習い事・課外活動：{{ $session->first()->hs_activities }}</div>
                                <x-profile-topic>大学時代</x-profile-topic>
                                <div class="text-sm pt-2">大学名：{{ $session->first()->uni_name }}</div>
                                <div class="text-sm pt-2">学部・学科名：{{ $session->first()->uni_course }}</div>
                                <div class="text-sm pt-2">課外活動(アルバイト・インターン含む)</div>
                                <x-profile-topic>一言Q&A</x-profile-topic>
                                <div class="text-sm pt-2">オススメ本：{{ $session->first()->recommend_book }}</div>
                                <div class="text-sm pt-2">オススメ映画：{{ $session->first()->recommend_movie }}</div>
                                <div class="text-sm pt-2">オススメYouTube：{{ $session->first()->recommend_youtube }}</div>
                                <div class="text-sm pt-2">オススメスポット：{{ $session->first()->recommend_spot }}</div>
                                <div class="text-sm pt-2">気分転換の方法：{{ $session->first()->refresh }}</div>

                        </div>
                    </div>

                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/sessions"
                                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                        </path>
                                        <path class="fill-current"
                                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>

                                Back to Posts
                            </a>

                            {{-- <div class="space-x-2">
                                <x-category-button :category="$session->category" />
                            </div> --}}
                        </div>

                        <h1 class="font-bold text-3xl lg:text-4xl mt-8 px-3">
                            {{ $session->first()->supporter->name }}さん図鑑
                        </h1>
                        <p class="text-xl mt-2 px-3">{{ $session->first()->title }}</p>
                        <div class="px-3">
                            <x-answer-topic>中高時代の振り返りQ&A</x-answer-topic>
                                <x-question>Q1.中高時代にやってよかったと思うことは？</x-question>
                                <x-answer>{{ $session->first()->good_todo }} </x-answer>
                                <x-question>Q2.中学生にうちにやっておけばよかったと思うことは？</x-question>
                                <x-answer>{{ $session->first()->recommend_todo }}</x-answer>
                                <x-question>Q3.今、高校１年生（16歳）の自分にメッセージを伝えるとしたら？</x-question>
                                <x-answer>{{ $session->first()->myself_todo }}</x-answer>
                            <x-answer-topic>「働く」を切り取るQ&A</x-answer-topic>
                                <x-question>Q4.今の仕事を選んだきっかけは？？</x-question>
                                <x-answer>{{ $session->first()->why_now_work }}</x-answer>
                                <x-question>Q5.あなたにとって「働く」とは？</x-question>
                                <x-answer>{{ $session->first()->what_work }}</x-answer>
                                <x-question>Q6.働いていてやりがいを感じる瞬間はいつですか？</x-question>
                                <x-answer>{{ $session->first()->reward_work }}</x-answer>
                            <x-answer-topic>価値観深掘りQ&A</x-answer-topic>
                                <x-question>Q7.過去にあった悩み・コンプレックスはどう解決してきましたか？</x-question>
                                <x-answer>{{ $session->first()->solve_complex }} </x-answer>
                                <x-question>Q8.「これに出会って自分は変わった！」と思えるもの（人）は何（誰）ですか？</x-question>
                                <x-answer>{{ $session->first()->change_myself }}</x-answer>
                                <x-question>Q9.あなたが、あと６ヶ月しか生きられないとしたら何をしますか？</x-question>
                                <x-answer>{{ $session->first()->six_month_todo }}</x-answer>
                                <x-question>Q10.死ぬまでに実現したいことは？</x-question>
                                <x-answer>{{ $session->first()->todo_till_death }}</x-answer>
                                <x-answer-topic>最後に、進路に悩む10代にメッセージを</x-answer-topic>
                                <x-answer>{{ $session->first()->last_message }}</x-answer>
                                <x-answer-topic>マイタグ</x-answer-topic>
                                <div>Coming soon...</div>
                                <x-answer-topic>進路相談を申し込む</x-answer-topic>
                                <div class="text-xm font-bold">進路相談可能日時</div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-xl mx-6 mt-3"> {{ $session->first()->start_at }}</div>
                                    <form action="/supporter/profile/create" method="post" enctype="multipart/form-data">
                                    </form>
                                </div>

                                {{-- @foreach ($session->first()->job_tags as $job_tag )
                                    <div>{{ $job_tag }}</div>
                                @endforeach
                                <!-- Begin TimeRex Widget --> --}}

                        </div>
                    </div>
                    {{-- <section class="col-span-8 col-start-5 mt-10 space-y-6">
                        @include('supporter.profile._add-comment-form')
                    @foreach ($session->first()->comments as $comment )
                    <x-session-comment :comment="$comment"/>

                    @endforeach
                    </section> --}}
                    
                </div>
                        


                </article>
            </main>
        </section>
    </body>
    </x-slot>
</x-app-layout>