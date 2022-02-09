
<p>{{ $StuName }}様</p>
<p>{{ $SupName }}様への進路相談を申し込みました！</p>
<p>この度はオンライン進路相談を申し込みいただきありがとうございます。</p>
<p>{{  $start_at }}より下記のZoomリンクからご参加ください。</p>

<div class="text-xm border-b">オンライン進路相談</div>
<div>進路相談相手：{{ $SupName }}</div>
<p>{{ $SupName }}さんの</p><a href="{{ route('supporter.sessions.detail', $id->id) }}">プロフィールはこちら</a>
<div>日時：{{ $start_at }}</div>
<div>会社名：{{ $company_name }}</div>
<div>肩書き：{{ $title }}</div>
<div>当日のZoomリンクはこちら</div>
<div>https://us05web.zoom.us/j/5372958155?pwd=V1VuNWI3WUpwY1VmREJJZU1PL0x0dz09
</div>
<p>ミーティングID: 537 295 8155</p>
<p>パスコード: M0ZFJK</p>

<div class="font-bold">canau運営事務局</div>
<div>お問い合わせ：canauteam@gmail.com</div>
<div>緊急連絡先：080-1870-7839</div>


