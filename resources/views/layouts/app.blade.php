<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.js" defer></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />
        <link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />
        <link href='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.css' rel='stylesheet' />
        <link href='https://unpkg.com/@fullcalendar/list@4.3.0/main.min.css' rel='stylesheet' />
        <script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/list@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/core/locales/ja'></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="pb-6">
            @if (auth('admin')->user())
                @include('layouts.admin-navigation')
            @elseif(auth('supporters')->user())
                @include('layouts.supporter-navigation')
            @elseif(auth('students')->user())
            @include('layouts.student-navigation')
            @endif
                

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}

                </div>
            </header> --}}
            <x-flash />
            <!-- Page Content -->    
        
             {{ $slot }}

            <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
                <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                <h5 class="text-3xl">あなたが抱える悩みを教えてください！</h5>
                <p class="text-sm mt-3">今後のサポーター（社会人選びの参考とさせていただきます。）</p>
    
                <div class="mt-10">
                    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
    
                        <form method="POST" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-2 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                                </label>
    
                                <input id="email" type="text" placeholder="海外へ行きたい！"
                                       class="lg:bg-transparent py-2 lg:py-0 pl-2 focus-within:outline-none">
                            </div>
    
                            <button type="submit"
                                    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                            >
                                送信！
                            </button>
                        </form>
                    </div>
                </div>
            </footer>
        </section>
    </body>
    
        </div>
    </body>
</html>
