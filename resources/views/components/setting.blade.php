@props(['heading','session'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-xl font-bold mb-8 text-blue-400 mb-6">
         {{ $heading }}
    </h1>
    <div class="flex">
        <aside class="w-50 flex-shrink-0 px-4">
            <ul class="pr-4">
                <h4 class="font-semibold mb-4">
                    <a href="/"></a>
                    マイページ</h4>
                    
                <li>
                    <a href="/admin/sessions/{{ $session->id }}/edit" class="{{ request()->is('admin.sessions.edit') ? 'text-blue-500' : '' }}">自分史編集</a>
                </li>
                <li>
                    <a href="/admin/sessions" class="{{ request()->is('admin/sessions') ? 'text-blue-500' : ''}}">進路相談日設定</a>
                </li>
            </ul>
            {{-- @if ("/admin/sessions/{{ $session->id }}/edit")

            @endif --}}

        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>


</section>