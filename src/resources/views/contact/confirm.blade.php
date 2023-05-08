@extends('layouts.app')

@section('content')
<div class="form900">
    <div class="inquiry2">お問い合わせ内容</div>
        <div class="inq2">
            <p class="inqcont992">・お問い合わせの書き込みありがとうございます。<br>
            &emsp;問い合わせ内容に不備等はございませんか？
            <!-- &emsp;問題がない場合は送信ボタンを修正したい場合は修正ボタン<br>を押してください。 -->
            </p>
            <p class="inqcont375">・お問い合わせの書き込みありがとうござ<br>&emsp;います。問い合わせ内容に不備等はござ<br>&emsp;いませんか？
            </p>
            <form method="POST" action="{{ route('contact.send') }}">
            @csrf
                <div class="email2">
                    <label class="confirmlabel">・メールアドレス:</label>
                        {{ $inputs['email'] }}
                    <input  type="hidden" name="email" value="{{ $inputs['email'] }}">
                </div>
                <div class="title2">
                    <label class="confirmlabel">・タイトル:</label>
                        {{ $inputs['title'] }}
                    <input  type="hidden" name="title" value="{{ $inputs['title'] }}">
                </div>
                <div class="contents2">
                    <label class="confirmlabel">・お問い合わせ内容:</label>
                        {!! nl2br(e($inputs['body'])) !!}
                    <input  type="hidden" name="body" value="{{ $inputs['body'] }}">         
                </div>
                    <button type="submit" class="inquiry2-button1" name="action" value="back" size="20">入力内容修正</button>
                    <button type="submit" class="inquiry2-button2" name="action" value="submit">送信する</button>
            </form>
        </div>
</div>
@endsection