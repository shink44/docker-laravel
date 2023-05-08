@extends('layouts.app')
 
 @section('content')
 <div style="margin: 60px">
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h3 class="text-center">ユーザー登録ありがとうございます！</h3>
 
             <p class="text-center">
                 現在は仮ユーザーの状態です。  
             </p>
 
             <p class="text-center">
                 ただいま、ご入力頂いたメールアドレス宛に、ご本人様確認用のメールをお送りしました。  
             </p>
 
             <p class="text-center">
                 メール本文内のURLをクリックすると本会員登録が完了となります。  
             </p>
             <div class="text-center">
                 <a href="{{ url('/recruitment') }}" class="btn furebo-submit-button w-50 text-white">トップページへ</a>
             </div>
         </div>
     </div>
 </div>
</div>
 @endsection