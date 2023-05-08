@extends('layouts.app')
@section('content')
<div class="form900">
    <div class="completion">
        <h1>お問い合わせ完了</h1>
        <p class="comcont992">
            ・お問い合わせが完了しました。この度はお問い合わせ有難う御座います。<br>
            &emsp;お問い合わせフォームの際に入力していただいたメールアドレスの方に<br>
            &emsp;当サイト、フレボから確認メールを送らせていただいております。<br>
            &emsp;お問い合わせ頂いた事をなどをもとに当サイトの更なる発展、改善等に努めて参ります。<br>
            &emsp;今後とも当サイトをよろしくお願い致します。
        </p>
        <p class="comcont375">
            ・お問い合わせが完了しました。この度はお問い<br>&emsp;合わせ有難う御座います。
            お問い合わせフォー<br>&emsp;ムの際に入力していただいたメールアドレスの<br>&emsp;方に
            当サイト、フレボから確認メールを送らせ<br>&emsp;ていただいております。
            お問い合わせ頂いた事<br>&emsp;をなどをもとに当サイトの更なる発展、改善等<br>&emsp;に努めて参ります。<br>
            &emsp;今後とも当サイトをよろしくお願い致します。
        </p>
        <a href="{{ url('/recruitment') }}" class="home">ホームへ</a>
    </div>
</div>
@endsection