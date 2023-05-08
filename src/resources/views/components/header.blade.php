<nav class="navbar navbar-expand navbar-light shadow-sm bg-info bg-gradient furebo-header-container">
   <div class="container">
     <a class="navbar-brand" href="{{ url('/recruitment') }}">
       {{ config('app.name', 'Laravel') }}
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon">
      </span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ms-auto mr-5 mt-2">
         <!-- Authentication Links -->
         @guest
         <li class="nav-item mr-5 userregister">
           <a class="nav-link" href="{{ route('register') }}">{{ __('新規ユーザー登録') }}</a>
         </li>
         <li class="nav-item mr-5 login">
           <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
         </li>
         <hr>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
         </li>

         @else
         <li class="nav-item mr-5 mypageform">
           <a class="nav-link" href="{{ route('mypage') }}">
             <i class="fas fa-user mr-1"></i><label>マイページ</label>
           </a>
         </li>
         @endguest
       </ul>
     </div>
   </div>
 </nav>