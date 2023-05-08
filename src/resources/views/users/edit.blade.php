@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="row justify-content-center mt-5">
         <div class="col-md-5">
             <span>
                 <a href="{{ route('mypage') }}">マイページ</a> > ユーザー情報の編集
             </span>
 
             <h1 class="mt-3 mb-3">ユーザー情報の編集</h1>
             <hr>
 
             <form method="POST" action="{{ route('mypage') }}">
                 @csrf
                 <input type="hidden" name="_method" value="PUT">
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="name" class="text-md-left furebo-edit-user-info-label">ユーザー名</label>
                     </div>
                     <div class="collapse show editUserName">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="田中 太郎">
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>ユーザー名を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="email" class="text-md-left furebo-edit-user-info-label">メールアドレス</label>
                     </div>
                     <div class="collapse show editUserMail">
                         <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="furebo@furebo.com">
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>メールアドレスを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="game_id" class="text-md-left furebo-edit-user-info-label">ゲーム ID</label>
                     </div>
                     <div class="collapse show editUserPhone">
                         <input id="game_id" type="text" class="form-control @error('game_id') is-invalid @enderror" name="game_id" value="{{ $user->game_id }}" required autocomplete="game_id" autofocus placeholder="tanakatarou">
                         @error('game_id')
                         <span class="invalid-feedback" role="alert">
                             <strong>ゲーム IDを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="discord_id" class="text-md-left furebo-edit-user-info-label">Discord ID</label>
                     </div>
                     <div class="collapse show editUserPhone">
                         <input id="discord_id" type="text" class="form-control @error('discord_id') is-invalid @enderror" name="discord_id" value="{{ $user->discord_id }}" required autocomplete="discord_id" autofocus placeholder="田中#1111">
                         @error('discord_id')
                         <span class="invalid-feedback" role="alert">
                             <strong>Discord IDを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <hr>
                 <button type="submit" class="btn furebo-submit-button mt-3 w-25">
                     保存
                 </button>
             </form>

             <hr>
             <div class="d-flex justify-content-start">
                 <form method="POST" action="{{ route('mypage.destroy') }}">
                     @csrf
                     <input type="hidden" name="_method" value="DELETE">
                     <div class="btn dashboard-delete-link" data-bs-toggle="modal" data-bs-target="#delete-user-confirm-modal">退会する</div>
 
                     <div class="modal fade" id="delete-user-confirm-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="staticBackdropLabel"><label>本当に退会しますか？</label></h5>
                                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="閉じる">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <p class="text-center">一度退会するとデータはすべて削除され復旧はできません。</p>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn dashboard-delete-link" data-bs-dismiss="modal">キャンセル</button>
                                     <button type="submit" class="btn samuraimart-delete-submit-button">退会する</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 @endsection