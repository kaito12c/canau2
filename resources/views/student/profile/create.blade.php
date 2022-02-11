<x-app-layout>
    <!doctype html>
    <div class="min-h-screen flex flex-col sm:justify-center items-center py-6 sm:pt-0 bg-gray-100">
        <div class="text-xl font-bold my-8 text-blue-400">自分図鑑登録</div>
        <div class="w-full sm:max-w-lg mt-2 px-4 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" heading="自分史登録">
            <form action="supporter/sessions" method="post" enctype="multipart/form-data">
                @csrf
                <x-profile-topic>基本情報</x-profile-topic>
                {{-- <x-form.input name="name"  placeholder="山田 叶"/> --}}
                <x-form.input name="company_name"  placeholder="株式会社canau"/>
                <x-form.input name="title"  placeholder="代表取締役"/>
                <x-form.input name="supporter_image" type="file" />
                <x-profile-topic>中高時代についての問い</x-profile-topic>
                <x-form.textarea name="good_todo"  placeholder="サッカー部だったのですが、部活に没頭したことで「本気」を覚えました。"/>
                <x-form.textarea name="recommend_todo"  placeholder="学外のイベントやボランティアに参加すればよかった"/>
                <x-profile-topic>あなたの考え方についての問い</x-profile-topic>
                <x-form.textarea name="reward_work"  placeholder="頭の中にあるイメージがカタチになった時、最高に嬉しいです。"/>
                <x-form.textarea name="solve_complex"  placeholder="安心して挑戦できる環境を作りたいと思ったから"/>
                <x-profile-topic>メッセージ</x-profile-topic>
                <x-form.textarea name="last_message"  placeholder="思っている以上に大人になることは面白く世界は広いです。困ったらいつでも相談してください。"/>

                
                {{-- <x-form.field>
                    <x-form.label name="生き方タグ"/>
        
                <select name="category_id" id="category_id" 
                        class="rounded-md shadow-sm border-gray-300 
                                focus:border-indigo-300 focus:ring 
                                focus:ring-indigo-200 focus:ring-opacity-50 w-full p-1">
                    @foreach (\App\models\Category::all() as  $category )
                    <option value="{{ $category->id }}" {{ old('catagory_id') == $category->id ? 'selected' : '' }}">{{ ucwords($category->job_name) }}</option>
                        
                    @endforeach --}}
                    {{-- <option value="like_talking">話すのが好き</option>
                    <option value="like_analize">分析が好き</option>
                    <option value="like_smal_thing">細かい作業が好き</option>
                    <option value="like_moving">体を動かすことが好き</option>
                    <option value="like_educating">おせっかいが好き</option> --}}
                {{-- </select>
                    <x-form.error name="生き方"/>
                </x-form.field> --}}
                {{-- <div class="grid grid-cols-8 gap-8">
                    <div class="col-span-8 sm:col-span-8 lg:col-span-2">
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
        
                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                        <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
        
                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div> --}}

                <x-form.button>完了</x-form.button>
            </form>

        </div>
    </div>

</x-app-layout>