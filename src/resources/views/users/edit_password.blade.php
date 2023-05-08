@extends('layouts.app')
 
 @section('content')
 <div class="container mt-5">
    <div class="row justify-content-center mt-5">
         <div class="col">
             <span>
                 <a href="{{ route('mypage') }}">マイページ</a> > パスワードを変更
             </span>
 
             <h1 class="mt-3 mb-3">パスワードの変更</h1>
             <hr>

     <form method="post" action="{{route('mypage.update_password')}}">
         {{csrf_field()}}
         <input type="hidden" name="_method" value="PUT">
         <div class="form-group row mb-3">
             <label for="password" class="col-md-3 col-form-label text-md-right new-password">新しいパスワード</label>
 
             <div class="col-md-7">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror new-password" name="password" required autocomplete="new-password">
 
                 @error('password')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror
             </div>
         </div>
 
         <div class="form-group row mb-3">
             <label for="password-confirm" class="col-md-3 col-form-label text-md-right">確認用</label>
 
             <div class="col-md-7">
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
             </div>
         </div>
 
         <div class="form-group d-flex justify-content-center">
             <button type="submit" class="btn btn-danger update">
                 パスワード更新
             </button>
         </div>
     </form>
 </div>
 @endsection