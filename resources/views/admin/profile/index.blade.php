{{-- @extends('layouts.app') --}}

<x-app-layout>

    <x-slot name="slot">
        <div class="max-w-xl mx-auto mt-20 text-center">
            @include('student.sessions._header')
        </div>
        <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">
            <div  id="thisweek">
                    <div class="font-bold text-4xl py-3">▶︎今日の進路相談</div>
                    @if ($sessions->count())
                        <div class="lg:grid lg:grid-cols-3">
                            @foreach ($sessions as $session)
                            <x-session-card :session="$session"/>

                            @endforeach
                        </div>
                    {{ $sessions->links() }}
                @else
                    <p class="text-center">まだサポーターがいません。</p>
                @endif
            </div>
            <div id="nextweek">
                <div class="font-bold text-4xl py-3">▶︎今週の進路相談</div>
                @if ($sessions->count())
                    <div class="lg:grid lg:grid-cols-3">
                        @foreach ($sessions as $session)
                        <x-session-card :session="$session"/>

                        @endforeach
                    </div>
                {{ $sessions->links() }}
            @else
                <p class="text-center">まだサポーターがいません。</p>
            @endif
            </div>


    </main> 
        
    </x-slot>


</x-app-layout>