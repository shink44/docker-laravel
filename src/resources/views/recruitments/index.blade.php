<!-- 投稿フォーム -->


@include("recruitments.recruitment_form")
<!-- <div class="form992No2"> -->
<div class="form992No3 form992No4">
	<h2 class="lists">募集一覧</h2>
	@if (session('message-rm'))
  		<div class="message-rm">
    	{{ session('message-rm') }}
  		</div> 
 	@endif

	<script></script>
		<form class="search" method="GET" action="{{ route('recruitments.index') }}" >
			@csrf
			<div class="searchModel">
				<select id="searchModel" name="searchModel" value="{{ $searchModel }}">
					<option value="" disabled selected style='display:none;'>機種</option>
					<option value="PC">PC</option>
					<option value="PS4/PS5">PS4/PS5</option>
					<option value="XboxOne">XboxOne</option>
				</select>
			</div>
			<div class="searchModel">
				<select id="searchGame" name="searchGame" value="{{ $searchGame }}">
					<option value="" disabled selected style='display:none;'>ゲームモード</option>
					<option value="バトルロイヤル">バトルロイヤル</option>
					<option value="アリーナ">アリーナ</option>
					<option value="プライベートマッチ">プライベートマッチ</option>
					<option value="射撃訓練場">射撃訓練場</option>
				</select>
			</div>
			<div class="searchModel">
				<select id="searchRank" name="searchRank" value="{{ $searchRank }}">
					<option value="" disabled selected style='display:none;'>マッチング</option>
					<option value="カジュアル">カジュアル</option>
					<option value="ランクリーグ">ランクリーグ</option>
				</select>
			</div>
			<button type="submit" class="searchbutton"><span>検索する</span></button>
		</form>
	


  



@foreach ($recruitments as $recruitment)
	<div class="entry_sheet992">
		<div class="container">
			<div class="row align-items-start">
				<div class="col-lg px-4">
					<div class="gp2">
						<strong>投稿日時 :</strong>
						{{ $recruitment->created_at }}
					</div>
				</div>
				<div class="col-lg">
					<div class="gp1">
						<strong>機種名 :</strong>
						{{ $recruitment->model_name }}
					</div>
				</div>
				<div class="col-lg">
					<div class="gp1">
						<strong>ゲームモード :</strong>
						{{ $recruitment->game_mode }}
					</div>
				</div>
				<div class="col-lg">
					<div class="gp1">
						<strong>マッチング :</strong>
						{{ $recruitment->rank }}
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg px-4">
					<div class="gp2">
						<strong>ゲーム ID :</strong>
						{{ $recruitment->game_id }}
					</div>
				</div>
				<div class="col-lg">
					<div class="gp1">
						<strong>Discord ID :</strong>
						{{ $recruitment->discord_id }}
					</div>
				</div>
				<div class="col-lg">
					<div class="gp1">
						<strong>募集人数 :</strong>
						{{ $recruitment->applicant }}
					</div>
				</div>
				<div class="col-lg">
					<div class="gp1">
						<strong>目的要素 :</strong>
						{{ $recruitment->purpose }}
					</div>
				</div>
			</div>
			<div class="row align-items-end">
				<div class="col-lg px-4">
					<div class="gp3">
					<strong>内容 :</strong>
						<p>
						{{ $recruitment->content }}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="entry_sheet520">
		<label class="entrylabel">
			<strong>投稿日時 :</strong>
				{{ $recruitment->created_at }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>機種名 :</strong>
			{{ $recruitment->model_name }}
		</label>
		<br>		
		<label class="entrylabel">
			<strong>ゲームモード :</strong>
			{{ $recruitment->game_mode }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>マッチング :</strong>
			{{ $recruitment->rank }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>ゲーム ID :</strong>
			{{ $recruitment->game_id }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>Discord ID :</strong>
			{{ $recruitment->discord_id }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>募集人数 :</strong>
			{{ $recruitment->applicant }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>目的要素 :</strong>
			{{ $recruitment->purpose }}
		</label>
		<br>
		<label class="entrylabel">
			<strong>内容 :</strong>
			<p>
			{{ $recruitment->content }}
			</p>
		</label>
	</div>


@endforeach

	<div class="paginate">
	{{ $recruitments->appends(request()->query())->links() }}
	<!-- {{ $recruitments->links() }} -->
	</div>
</div>



@if(isset( $recruitments ))
@endif
@if(count($recruitments) < 1)
<p>投稿がありません</p>
@endif

@component('components.footer')
@endcomponent