@extends('layouts.app')
 
 @section('content')
 <div style="margin: 60px">
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h3 class="mt-3 mb-3">新規ユーザー登録</h3>
 
             <hr>
 
             <form method="POST" action="{{ route('register') }}">
                 @csrf
 
                 <div class="form-group row">
                     <label for="name" class="col-md-5 col-form-label text-md-left">ユーザー名<span class="ml-1 furebo-require-input-label"><span class="furebo-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror furebo-login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="田中 太郎">
 
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>ユーザー名を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
 
                 <div class="form-group row">
                     <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span class="ml-1 furebo-require-input-label"><span class="furebo-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror furebo-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="tanaka@tanaka.com">
 
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>メールアドレスを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
 
                 <div class="form-group row">
                     <label for="game_id" class="col-md-5 col-form-label text-md-left">ゲーム ID<span class="ml-1 furebo-require-input-label"><span class="furebo-require-input-label-text"></span></span></label>
 
                     <div class="col-md-7">
                         <input type="text" class="form-control @error('game_id') is-invalid @enderror furebo-login-input" name="game_id" required placeholder="ゲーム IDを記入してください">
                     </div>
                 </div>
 
                 <div class="form-group row">
                     <label for="discord_id" class="col-md-5 col-form-label text-md-left">Discord ID<span class="ml-1 furebo-require-input-label"><span class="furebo-require-input-label-text"></span></span></label>
 
                     <div class="col-md-7">
                         <input type="text" class="form-control @error('discord_id') is-invalid @enderror furebo-login-input" name="discord_id" required placeholder="Discord IDを記入してください">
                     </div>
                 </div>
 
                 <div class="form-group row">
                     <label for="password" class="col-md-5 col-form-label text-md-left">パスワード<span class="ml-1 furebo-require-input-label"><span class="furebo-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror furebo-login-input" name="password" required autocomplete="new-password">
 
                         @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
 
                 <div class="form-group row">
                     <label for="password-confirm" class="col-md-5 col-form-label text-md-left"></label>
 
                     <div class="col-md-7">
                         <input id="password-confirm" type="password" class="form-control furebo-login-input" name="password_confirmation" required autocomplete="new-password" required placeholder="確認">
                     </div>
                 </div>
 
                 <div class="form-group">
                     <input type="submit" value="ユーザー登録" class="btn furebo-submit-button w-100">
                         
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>
 @endsection