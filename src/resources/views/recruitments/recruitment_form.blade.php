@extends('layouts.app')
 
@section('content')
<div class="form992">
<!-- メッセージ系統 -->
  <!-- ログイン -->
  @if (session('message-login'))
    <div class="message-login">
      {{ session('message-login') }}
    </div> 
  @endif
  <!-- ログアウト -->
  @if (session('message-logout'))
    <div class="message-login">
      {{ session('message-logout') }}
    </div> 
  @endif
  <!-- ユーザー退会 -->
  @if (session('message-userout'))
    <div class="message-login">
      {{ session('message-userout') }}
    </div> 
  @endif

  <div class="form">
    <div class="apexlogo">
      <img src="{{asset('img/apexlogo.jpg')}}">
      <p>Apex Legends エーペックスレジェンズ</p>
    </div>
    <p class="description992">
      ・こちらのサイトはフレンドや境遇の仲間を集めるサイトとしてご利用してください。<br>
      &emsp;※当サイトは出会い系目的や暴言等を書き込むサイトではございません。<br>
      &emsp;ご利用の際は上記の内容をきちんとお守りください。
    </p>
    <p class="description520">
      ・こちらのサイトはフレンドや境遇の仲間を集めるサイトとして<br>&emsp;ご利用してください。
      &emsp;&ensp;&thinsp;※当サイトは出会い系目的や暴言等<br>&emsp;を書き込むサイトではございません。<br>
      &emsp;ご利用の際は上記の内容をきちんとお守りください。
    </p>

    <div class="inquiry">
      <a href="{{ url('/contact') }}" class="icon"></a>
      <a href="{{ url('/contact') }}" class="inqbutton">お問い合わせはこちら</a>
    </div>
    <p class="improvement">※改善点や希望などは上記まで</p>
      <p class="registration992">
        ・当サイトは簡易的なユーザー登録要素もあります。<br>
        &emsp;登録を行う事で登録したID（ゲームIDなど）を元に投稿時の打ち込み要素<br>&emsp;を簡素化できます.
        &emsp;&emsp;&emsp;※尚、登録には個人情報などは必要ありません。
      </p>
      <p class="registration520">
        ・当サイトは簡易的なユーザー登録要素もあります。<br>
        &emsp;登録を行う事で登録したID（ゲームIDなど）を元に投稿時<br>&emsp;の打ち込み要素を簡素化できます.
        <br>&emsp;※尚、登録には個人情報などは必要ありません。
      </p>
    <h1 class="page">⬇️各機種ごとの投稿ページ⬇️</h1>
  </div>



<!-- 機種別書き込み欄 -->
<div class="container">
  <div class="row">
    <div class="col-md-4">        
      <a class="btn mt-3 d-flex justify-content-center border border-dark furebo-PC" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        PC
      </a>
    </div>
    <div class="col-md-4">
      <a class="btn mt-3 d-flex justify-content-center border border-dark furebo-PS4PS5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        PS4/PS5
      </a>
    </div>
    <div class="col-md-4">
       <a class="btn mt-3 d-flex justify-content-center border border-dark furebo-XboxOne" data-bs-toggle="modal" data-bs-target="#exampleModal3">
         XboxOne
       </a>
    </div>
  </div>
</div>


    <!-- Modal PC -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fluid">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">×閉じる</button>
      </div>
      <form role="form" id="form1" action="{{ url('/create') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <div class="list">
              <label class="listlabel">機種名:</label>
                  <input type="text" class="model" name="model_name" value="PC" readonly>
              <br>
              <label class="listlabel">ゲームモード:</label>
                <select id="game_mode" name="game_mode">
                  <option value="" disabled selected style='display:none;'>モードを選択してください</option>
                  <option value="バトルロイヤル">バトルロイヤル</option>
                  <option value="アリーナ">アリーナ</option>
                  <option value="プライベートマッチ">プライベートマッチ</option>
                  <option value="射撃訓練場">射撃訓練場</option>
                </select>
                <br>
              <label class="listlabel">マッチング:</label>
                <select id="rank" name="rank">
                  <option value="" disabled selected style='display:none;'>マッチングを選択してください</option>
                  <option value="カジュアル">カジュアル</option>
                  <option value="ランクリーグ">ランクリーグ</option>
                </select>
                <br>
              <label class="listlabel">目的要素:</label>
                <select id="purpose" name="purpose">
                  <option value="" disabled selected style='display:none;'>目的を選択してください</option>
                  <option value="フレンド">フレンド</option>
                  <option value="協力">協力</option>
                  <option value="対戦">対戦</option>
                </select>
                <br>
              <label class="listlabel">募集人数:</label>
                <select id="applicant" name="applicant">
                  <option value="" disabled selected style='display:none;'>募集人数を選択してください</option>
                  <option value="1人">1人</option>
                  <option value="2人">2人</option>
                  <option value="複数人">複数人</option>
                </select>
                <br>
              <label class="listlabel">SteamID<span class="danger1">必須</span>:</label>
                
		          <input type="text" id="text" name="game_id" value="{{ $user ? $user->game_id : old('game_id') }}" placeholder="SteamIDをお書きください">
              <br>
                @if ($errors->has('game_id'))
                  <p class="em">※注意 SteamIDを入力して下さい。</p>
                @endif
              <label class="listlabel2">Discord ID:</label>
		            <input type="text" id="text" name="discord_id" value="{{ $user ? $user->discord_id : old('discord_id') }}" placeholder="Discord IDをお書きください">
                <br>
		          <label class="content">内容:</label>
		            <textarea id="content" name="content" placeholder="募集内容をお書きください">{{ old('content') }}</textarea>
                <br>
              <button type="submit" class="btn btn-secondary shadow button">書き込む</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    </div>
 </div>
</div>


    <!-- Modal PS4/PS5 -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fluid">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">×閉じる</button>
      </div>
      <form role="form" id="form1" action="{{ url('/create') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="list">
            <label class="listlabel">機種名:</label>
                  <input type="text" class="model" name="model_name" value="PS4/PS5" readonly>
              <br>
              <label class="listlabel">ゲームモード:</label>
                  <select id="game_mode" name="game_mode">
                    <option value="" disabled selected style='display:none;'>モードを選択してください</option>
                    <option value="バトルロイヤル">バトルロイヤル</option>
                    <option value="アリーナ">アリーナ</option>
                    <option value="プライベートマッチ">プライベートマッチ</option>
                    <option value="射撃訓練場">射撃訓練場</option>
                   </select>
                   <br>
               <label class="listlabel">マッチング:</label>
                   <select id="rank" name="rank">
                     <option value="" disabled selected style='display:none;'>マッチングを選択してください</option>
                     <option value="カジュアル">カジュアル</option>
                     <option value="ランクリーグ">ランクリーグ</option>
                   </select>
                   <br>
               <label class="listlabel">目的要素:</label>
                   <select id="purpose" name="purpose">
                     <option value="" disabled selected style='display:none;'>目的を選択してください</option>
                     <option value="フレンド">フレンド</option>
                     <option value="協力">協力</option>
                     <option value="対戦">対戦</option>
                  </select>
                  <br>
               <label class="listlabel">募集人数:</label>
                  <select id="applicant" name="applicant">
                     <option value="" disabled selected style='display:none;'>募集人数を選択してください</option>
                     <option value="1人">1人</option>
                     <option value="2人">2人</option>
                     <option value="複数人">複数人</option>
                  </select>
                  <br>
               <label class="listlabel">PSID<span class="danger1">必須</span>:</label>
		             <input type="text" id="text" name="game_id" value="{{ $user ? $user->game_id : old('game_id') }}" placeholder="PSIDをお書きください">                 
                 <br>
                    @if ($errors->has('game_id'))
                        <p class="em">※注意 PSIDを入力して。</p>
                    @endif
               <label class="listlabel2">Discord ID:</label>
		             <input type="text" id="text" name="discord_id" value="{{ $user ? $user->discord_id : old('discord_id') }}" placeholder="Discord IDをお書きください">
               <br>
		             <label class="content">内容:</label>
		             <textarea id="content" name="content" placeholder="募集内容をお書きください">{{ old('content') }}</textarea>
               <br>
                 <button type="submit" class="btn btn-secondary shadow button">書き込む </button>
               </div>
            </div>
          </div>
        </form>
      </div>
    </div>
 </div>
</div>

    <!-- Modal XboxOne -->
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fluid">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">×閉じる</button>
      </div>
      
      <form role="form" id="form1" action="{{ url('/create') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <div class="list">
            <label class="listlabel">機種名:</label>
                  <input type="text" class="model" name="model_name" value="XboxOne" readonly>
              <br>
              <label class="listlabel">ゲームモード:</label>
                  <select id="game_mode" name="game_mode">
                    <option value="" disabled selected style='display:none;'>モードを選択してください</option>
                    <option value="バトルロイヤル">バトルロイヤル</option>
                    <option value="アリーナ">アリーナ</option>
                    <option value="プライベートマッチ">プライベートマッチ</option>
                    <option value="射撃訓練場">射撃訓練場</option>
                   </select>
                   <br>
               <label class="listlabel">マッチング:</label>
                   <select id="rank" name="rank">
                     <option value="" disabled selected style='display:none;'>マッチングを選択してください</option>
                     <option value="カジュアル">カジュアル</option>
                     <option value="ランクリーグ">ランクリーグ</option>
                   </select>
                   <br>
               <label class="listlabel">目的要素:</label>
                   <select id="purpose" name="purpose">
                     <option value="" disabled selected style='display:none;'>目的を選択してください</option>
                     <option value="フレンド">フレンド</option>
                     <option value="協力">協力</option>
                     <option value="対戦">対戦</option>
                  </select>
                  <br>
               <label class="listlabel">募集人数:</label>
                  <select id="applicant" name="applicant">
                     <option value="" disabled selected style='display:none;'>募集人数を選択してください</option>
                     <option value="1人">1人</option>
                     <option value="2人">2人</option>
                     <option value="複数人">複数人</option>
                  </select>
                  <br>
               <label class="listlabel">ゲ-マ-タグ<span class="danger1">必須</span>:</label>
		             <input type="text" id="text" name="game_id" value="{{ $user ? $user->game_id : old('game_id') }}" placeholder="ゲ-マ-タグをお書きください">
                 <br>
               @if ($errors->has('game_id'))
                        <p class="em">※注意 ゲ-マ-タグを入力して下さい。</p>
                    @endif
               <label class="listlabel2">Discord ID:</label>
		             <input type="text" id="text" name="discord_id" value="{{ $user ? $user->discord_id : old('discord_id') }}" placeholder="Discord IDをお書きください">
               <br>
		             <label class="content">内容:</label>
		             <textarea id="content" name="content" placeholder="募集内容をお書きください">{{ old('content') }}</textarea>
               <br>
                 <button type="submit" class="btn btn-secondary shadow button">書き込む </button>
               </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    </div>
 </div>
</div>





<!-- 書き込み一覧 -->

<!-- <form method="POST" action="{{ url('/create') }}">
  @csrf
  <div class="list">
        <div class="model_name">機種名:
          <select name="model_name">
            <option value="" disabled selected style='display:none;'>機種名を選択してください</option>
            <option value="PC">PC</option>
            <option value="PS4/PS5">PS4/PS5</option>
            <option value="XboxOne">XboxOne</option>
          </select>
        </div>
        <div class="game_mode">ゲームモード:
          <select name="game_mode">
          <option value="" disabled selected style='display:none;'>モードを選択してください</option>
            <option value="バトルロイヤル">バトルロイヤル</option>
            <option value="アリーナ">アリーナ</option>
            <option value="プライベートマッチ">プライベートマッチ</option>
            <option value="射撃訓練場">射撃訓練場</option>
          </select>
        </div>
        <div class="rank">マッチング:
          <select name="rank">
          <option value="" disabled selected style='display:none;'>マッチングを選択してください</option>
            <option value="カジュアル">カジュアル</option>
            <option value="ランクリーグ">ランクリーグ</option>
          </select>
        </div>
        <div class="purpose">目的要素:
          <select name="purpose">
          <option value="" disabled selected style='display:none;'>目的を選択してください</option>
            <option value="フレンド">フレンド</option>
            <option value="協力">協力</option>
            <option value="対戦">対戦</option>
         </select>
        </div>
        <div class="applicant">募集人数:
          <select name="applicant">
          <option value="" disabled selected style='display:none;'>募集人数を選択してください</option>
            <option value="1人">1人</option>
            <option value="2人">2人</option>
            <option value="複数人">複数人</option>
          </select>
        </div>
        <div class="game_id">ゲーム ID:
		        <input type="text" name="game_id" size="28" placeholder="PlayStation IDをお書きください">                 
        </div>
        <div class="discord_id">Discord ID:
		        <input type="text" name="discord_id" size="28" placeholder="Discord IDをお書きください">     
	      </div>
        <div class="content">
		        <label>内容:</label>
		        <textarea name="content" placeholder="募集内容をお書きください"></textarea>
	      </div>
        <button type="submit" class="btn1 write"><span>書き込む</span><span>完了！</span>
            書き込む
        </button>
        <p class="period">※投稿内容は3日後に自動削除されます</p>
    </div>
  </div>
</form> -->



<hr>
</div>
@endsection