@extends('layouts.app')
 
 @section('content')
 @if (session('message'))
  <div class="alertupM">
    {{ session('message') }}
  </div> 
 @endif
 @if (session('message-password'))
  <div class="alertupM">
    {{ session('message-password') }}
  </div> 
 @endif


 <div class="container d-flex justify-content-center mypage992">
     <div class="w-50">
         <h1>マイページ</h1>
 
         <hr>
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                        <img src="{{asset('img/human.png')}}" width="68">
                     </div>
                     <div class="col-9 d-flex align-items-center mt-3 user">
                         <div class="d-flex flex-column">
                             <label for="user-name">ユーザー情報の編集</label>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="{{route('mypage.edit')}}">
                        <img src="{{asset('img/right.png')}}" width="40">
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>

         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <img src="{{asset('img/password.png')}}" width="68">
                     </div>
                     <div class="col-9 d-flex align-items-center mt-3 password">
                         <div class="d-flex flex-column">
                             <label for="user-name">パスワードを変更</label>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="{{ route('mypage.edit_password') }}">
                        <img src="{{asset('img/right.png')}}" width="40">
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>
 
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                        <img src="{{asset('img/logout.png')}}" class="logoutimg">
                     </div>
                     <div class="col-9 d-flex align-items-center mt-3 logout">
                         <div class="d-flex flex-column">
                             <label class="user-name">ログアウト</label>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{asset('img/right.png')}}" width="40">
                     </a>
 
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </div>
         </div>
 
         <hr>
     </div>
 </div>









 
 <div class="container d-flex justify-content-center mypage375">
     <div class="w-75">
         <h1>マイページ</h1>
 
         <hr>
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                        <img src="{{asset('img/human.png')}}" width="40">
                     </div>
                     <div class="col-9 d-flex align-items-center mt-3 user-editing">
                         <div class="d-flex flex-column">
                             <label>ユーザー情報の編集</label>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="{{route('mypage.edit')}}">
                        <img src="{{asset('img/right.png')}}" width="30">
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>

         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                         <img src="{{asset('img/password.png')}}" width="40">
                     </div>
                     <div class="col-9 d-flex align-items-center mt-3 user-editing">
                         <div class="d-flex flex-column">
                             <label>パスワードを変更</label>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="{{ route('mypage.edit_password') }}">
                        <img src="{{asset('img/right.png')}}" width="30">
                     </a>
                 </div>
             </div>
         </div>
 
         <hr>
 
 
         <div class="container">
             <div class="d-flex justify-content-between">
                 <div class="row">
                     <div class="col-2 d-flex align-items-center">
                        <img src="{{asset('img/logout.png')}}" class="logoutimg">
                     </div>
                     <div class="col-9 d-flex align-items-center mt-3 user-logout">
                         <div class="d-flex flex-column">
                             <label>ログアウト</label>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{asset('img/right.png')}}" width="30">
                     </a>
 
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </div>
         </div>
 
         <hr>
     </div>
 </div>
 @endsection