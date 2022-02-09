    {{-- ここはいつか移し替えるコメント入力欄 --}}
    <x-panel>
        <form action="/student/profile/{{ $session->first()->id }}/comments" method="post">
            @csrf
            <header class="flex items-center">
                <h2 class="ml-4">{{ $session->first()->supporter->name }}さんに質問する</h2>
            </header>
            <div class="mt-6">
                <textarea 
                    name="body" 
                    class="w-full text-sm focus:outline-none focus:ring rounded-xl" 
                    rows="5" 
                    placeholder=" 質問があれば聞いてみましょう。" 
                    required></textarea>
                    @error('body')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
            </div>
            <input type="hidden"  name="session_id" value="{{ $session->first()->id }}"/>
            <input type="hidden"  name="student_id" value="{{ Auth()->user()->id}}"/>
            <div class="flex justify-end">
                <x-form.button>投稿</x-form.button>
            </div> 
            {{-- <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <button type="submit" class="bg-blue-500 text-white font-semibold text-sm py-2  px-8 rounded-2xl hover:bg-blue-600 ">投稿</button>
            </div> --}}

            </form>
    </x-panel>