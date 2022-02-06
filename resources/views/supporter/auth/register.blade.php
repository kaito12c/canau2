<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-app-logo class="w-25 h-25 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('supporter.register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="山田 叶" required autofocus />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="birthday" :value="__('誕生日')" />
            
                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" value="2000-01-01" placeholder="2000/01/01" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="canau@email.com" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="半角英数字含め8文字以上で入れてください。"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('もう一度パスワードを入力してください。')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- 属性を確認 -->
            <div class="mt-4">
                <x-label for="roles" :value="__('所属')" />
                {!! Form::select('roles', [1=>'高校生',2=>'大学生・専門学生', 3=>'大学院生',4=>'社会人'],  null,['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}

            </div>

            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('supporter.login') }}">
                    {{ __('登録済みですか？') }}
                </a>

                <x-form.button class="ml-4">
                    {{ __('登録する') }}
                </x-form.button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
