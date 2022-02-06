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
                        <img src="{{ asset('storage/' . $session->supporter_image) }}" alt="" class="px-1 rounded-xl ">

                        {{-- <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>1 day ago</time>
                        </p> --}}

                        <div class="flex text-center lg:justify-center text-sm mt-4">
                            {{-- <img src="../images/lary-avatar.svg" alt="Lary avatar"> --}}
                            <div class="ml-3 text-center">
                                <h5 class="font-bold text-xl">{{ $session->supporter->name }}</h5>
                                <h6>{{ $session->company_name }}</h6>
                            </div>
                        </div>
                        <div class="bg-blue-50 my-6 p-3 text-left rounded-xl"> 
                            <div class="font-bold text-xl my-2">プロフィール</div>
                                <x-profile-topic>基本情報 </x-profile-topic>
                                <div class="text-sm pt-2">出身：{{ $session->supporter->name }}</div>
                                <div class="text-sm pt-2">居住地：{{ $session->supporter->name }}</div>
                                <div class="text-sm pt-2">会社名：{{ $session->company_name }}</div>
                                <div class="text-sm pt-2">肩書き：{{ $session->title }}</div>
                                <x-profile-topic>中学時代</x-profile-topic>
                                <div class="text-sm pt-2">学校名：{{ $session->supporter->name }}中学校</div>
                                <div class="text-sm pt-2">部活動{{ $session->supporter->name }}</div>
                                <div class="text-sm pt-2">習い事・課外活動： 文字数が多い場合はどうなるんだろう？？</div>
                                <x-profile-topic>高校時代 </x-profile-topic>
                                <div class="text-sm pt-2">学校名：立命館慶祥中学校・高等学校</div>
                                <div class="text-sm pt-2">部活動：{{ $session->supporter->name }}</div>
                                <div class="text-sm pt-2">習い事・課外活動：{{ $session->supporter->name }}</div>
                                <x-profile-topic>大学時代</x-profile-topic>
                                <div class="text-sm pt-2">大学名：立命館大学</div>
                                <div class="text-sm pt-2">学部・学科名：国際関係学部国際関係学科</div>
                                <div class="text-sm pt-2">課外活動(アルバイト・インターン含む)</div>
                                <div class="text-sm">{{ $session->supporter->name }}</div>
                                <x-profile-topic>一言Q&A</x-profile-topic>
                                <div class="text-sm pt-2">オススメ本：</div>
                                <div class="text-sm pt-2">オススメ映画：</div>
                                <div class="text-sm pt-2">オススメYouTube：</div>
                                <div class="text-sm pt-2">オススメスポット：</div>
                                <div class="text-sm pt-2">気分転換の方法：</div>
                                <div class="text-sm">{{ $session->supporter->name }}</div>


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
                            {{ auth()->user()->name }}さんのMy Ansewer
                        </h1>
                        <p class="text-xl mt-2 px-3">{{ $session->title }}</p>
                        <div class="px-3">
                            <x-answer-topic>中高時代の振り返りQ&A</x-answer-topic>
                                <x-question>Q1.中高時代にやってよかったと思うことは？</x-question>
                                <x-answer>これがマイアンサー。ここは自由に書いていいところ。あなたの言葉が子供を救う。そう本気で思うおとなにきてほしいと思っています。待ちしております。 </x-answer>
                                <x-question>Q2.中学生にうちにやっておけばよかったと思うことは？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-question>Q3.今、高校１年生（16歳）の自分にメッセージを伝えるとしたら？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                            <x-answer-topic>「働く」を切り取るQ&A</x-answer-topic>
                                <x-question>Q4.今の仕事を選んだきっかけは？？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-question>Q5.あなたにとって「働く」とは？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-question>Q6.働いていてやりがいを感じる瞬間はいつですか？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                            <x-answer-topic>価値観深掘りQ&A</x-answer-topic>
                                <x-question>Q7.過去にあった悩み・コンプレックスはどう解決してきましたか？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-question>Q8.「これに出会って自分は変わった！」と思えるもの（人）は何（誰）ですか？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-question>Q9.あなたが、あと６ヶ月しか生きられないとしたら何をしますか？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-question>Q10.死ぬまでに実現したいことは？</x-question>
                                <x-answer>これがマイアンサー </x-answer>
                                <x-answer-topic>最後に、進路に悩む10代にメッセージを</x-answer-topic>
                                <x-answer>これがマイアンサー </x-answer>
                                <!-- Begin TimeRex Widget -->
                                <div id="timerex_calendar" data-url="https://timerex.net/s/canauteam/b144df12"></div>

                                <script id="timerex_embed" src="https://asset.timerex.net/js/embed.js"></script>

                                <script type="text/javascript">
                                TimerexCalendar();
                                </script>
                                <!-- End TimeRex Widget -->
                                <div id="timerex_calendar" data-url="https://timerex.net/s/canauteam/b144df12"></div>

                                <script id="timerex_embed" src="https://asset.timerex.net/js/embed.js"></script>

                                <script type="text/javascript">
                                TimerexCalendar();
                                </script>
                                <!-- End TimeRex Widget -->
                                
                                <div class="py-3">
                                    <x-answer-topic>{{ auth()->user()->name }}さんに進路相談する</x-answer-topic>
                                    <x-question>進路相談実施日</x-question>
                                    <p class="px-2">
                                        2/1(火)16:00〜16:30
                                    </p>
                                    <div class="flex justify-end px-2">
                                        <x-form.button>進路面談する</x-form.button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <section class="col-span-8 col-start-5 mt-10 space-y-6">
                        @include('sessions._add-comment-form')
                    @foreach ($session->comments as $comment )
                    <x-session-comment :comment="$comment"/>

                    @endforeach
                    </section>
                    
                </div>
                        


                </article>
            </main>
        </section>
    </body>
    </x-slot>
</x-app-layout>