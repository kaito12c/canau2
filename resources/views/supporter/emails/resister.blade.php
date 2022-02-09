
<p>{{ $name }}様</p>
<p>canauへのご登録ありがとうございます！</p>


<p>canauへの登録を受け付けました。　{{ $name }}さんのおかげ中高生が1人で悩まず、一歩踏み出すことができます。</p>

<div class="text-xm border-b">今後の流れ</div>
<div>①中高生の進路構築のヒントとなるよう下記のURLからプロフィールをさらに充実させてください。</div>
<a href="{{ route('supporter.profile.edit', auth()->user()->id) }}">プロフィール編集はこちら</a>
<div>②中高生から申し込みがあるとご登録いただいたメールに通知が届きます。</div>
<div>③届いたメールにあるZoomのリンクから進路相談の５分前にご参加ください。</div>
<p class="font-bold">canau運営事務局</p>
<div>お問い合わせ：canauteam@gmail.com</div>
<div>緊急連絡先：080-1870-7839</div>