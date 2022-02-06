<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-app-logonn class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="mb-4 text-xm font-bold text-gray-600">
            {{ __('アカウント登録ありがとうございます！ ') }}
        </div>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('登録いただいたメールアドレスに確認メールを送りました。届いたメールの「認証する」のボタンを押してください。もし届いていない場合はメールアドレスが間違っているか、迷惑メールに届いている場合があります。') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('認証メールを送信しました。届いたメールをご確認の上、記載のリンクから登録を完了させてください。') }}

            </div>
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('※メールが届かない場合は、入力したアドレスに間違いがあるか、あるいは迷惑メールフォルダに入っている可能性がありますのでご確認ください。') }}

            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('supporter.verification.send') }}">
                @csrf

                <div>
                    <x-form.button>
                        {{ __('認証メールを再送する') }}
                    </x-form.button>
                </div>
            </form>

            <form method="POST" action="{{ route('supporter.logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 mt-6">
                    {{ __('ログアウト') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
