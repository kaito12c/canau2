<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.js" defer></script>

</head>

<div class="max-w-xl mx-auto mt-10 text-center">
    <h1 class="text-4xl font-bold">
        オンライン<span class="text-blue-300">進路</span>相談
    </h1>

    <h2 class="inline-flex mt-2 text-align-center">by <img src="../images/logo_yoko_only.png"
                                                       alt="Head of Lary the mascot" width="80" height="50"></h2>
    <div class="mt-6">
        <p class="font-bold my-2 text-xm">オンラインで気軽に進路相談する３ステップ</p>
        <div class="ipx-2">
            <p class="px-6  pt-3 w-40 font-bold">STEP1</p><p class="mx-2">一覧から話を聞いてみたいor進路相談したい大人を探す</p>

            <p class="px-6  pt-3 w-40 font-bold">STEP2</p><p class="mx-2">気になる大人がいたら「詳細を見る」を押して詳細チェック</p>

            <p class="px-6  pt-3 w-40 font-bold">STEP3</p><p class="mx-2">この人に相談したいと思ったら、「進路相談する」をクリック</p>

        </div>

    </div>
{{-- 
    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>
    <div class="flex">
        <div class="space-y-2 lg:space-y-0 lg:space-x-6 mt-8">
            <!--  Category -->
            <div class="relative flex lg:inline-flex item-center bg-gray-100 rounded-xl"> 
                <x-categories-dropdowns />
            </div>
             <!-- Other Filters -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl">
                    <option value="category" disabled selected>キャリアタグ
                    </option>
                    <option value="foo">Foo
                    </option>
                    <option value="bar">Bar
                </option>
                </select> --}}
     
                {{-- <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
                </svg> --}}
            </div>
             <!-- Search -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl m-6">
                {{-- <form method="GET" action="/sessions">
                    {{-- @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                        
                    @endif --}}
                {{-- <input type="text" 
                    name="search" 
                    placeholder="気になる言葉を入力してください。"
                    class="bg-transparent placeholder-gray font-semibold text-sm rounded-xl w-64"
                    value="{{ request('search') }}"
                    >
                </form> --}} 
            </div>
            {{-- <div class="flex items-center">
                <a href="#thisweek">今週</a>
            </div>
            <div>
                <a href="#nextweek">来週</a> --}}
            </div>
        </div>
    </div>

</div>