 @props(['session'])   
    <article class ="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        {{-- {{ $attributes->merge(['class' =>'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl' ])}} --}}
        <div class="py-6 px-5">
            <div>
                <img src="{{ asset('storage/' . $session->supporter_image) }}" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="mt-4 flex flex-col justify-between">
                <header>
                    <div class="space-x-2">
                        <x-category-button :category="$session->category" />
                    </div>

                    {{-- <div class="mt-2">
                        <h1 class="text-3xl">
                            <a href="{{ route('sessions.detail', ['id'=>$session->id]) }}">
                                {{ $session->title }}
                        </h1> --}}

                        <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>1 day ago</time>
                        </span>
                    </div>
                </header>

                <div class="text-sm mt-4 space-y-4">
                    <p>
                        {{ $session->last_message }}
                    </p>

                    <p class="mt-4">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <footer class="flex justify-between items-center mt-6">
                    <div class="flex items-center text-sm">
                        <img src="../images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-2">
                            <div class="ml-3">
                                <h5 class="font-bold"><a href={{ route('supporter.sessions.detail', auth()->user()->id) }}>{{ $session->supporter->name }}</a></h5>
                                <h6 class="w-32">{{ $session->company_name }}</h6>
                            </div>
                    </div>

                    <div>
                        <a href={{ route('supporter.sessions.detail', auth()->user()->id) }}
                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                        >Read More</a>
                    </div>
                </footer>
            </div>
        </div>
    </article>