@extends('layouts.app')

@section('content')
<div class="form900">
    <div class="inquiry1">お問い合わせフォーム</div>
        <div class="inq1">
                <p class="inquiry-form992">・こちらはフレボのお問い合わせフォームです。<br>&emsp;改善要素や質問等などがある場合にこちらをご利用ください。</p>
                <p class="inquiry-form375">・こちらはフレボのお問い合わせフォーム<br>&emsp;です。改善要素や質問等などがある場合<br>&emsp;にこちらをご利用ください。</p>
            <form method="POST" action="{{ route('contact.confirm') }}">
            @csrf
                <div class="inquiry-content">
                    <label class="email1">・メールアドレス
                        <input type="text" name="email" value="{{ old('email') }}" size="30">
                    </label>
                    <br>
                    @if ($errors->has('email'))
                        <p class="em2">※注意 メールアドレスを入力してください。</p>
                    @endif
                    <label class="title1">・タイトル
                        <input type="text" name="title" value="{{ old('title') }}" size="30"> 
                    </label>
                    <br>
                    @if ($errors->has('title'))
                        <p class="em3">※注意 タイトルを記入してください。</p>
                    @endif
                    <label class="content1">・お問い合わせ内容</label>
                        <textarea id="contents" name="body">{{ old('body') }}</textarea>
                    <br>
                    @if ($errors->has('body'))
                        <p class="em4">※注意 お問い合わせ内容を記入してください。</p>
                    @endif
                    <button type="submit" class="inquiry-button">入力内容確認</button>
                </div>
            </form>
        </div>
</div>
@endsection