@extends('user_main')
@section('right-container')
	<div class="ui segment main">
	@if($user->id==Auth::id())
		<h2 class="ui left floated header">我的個人資料</h2>
	@else
		<h2 class="ui left floated header">{{$user->pname}}的個人資料</h2>
	@endif
	<div class="ui clearing divider"></div>
	<div class="profile_table">
		<table class="ui table segment" style="height:100%;width:100%;">
			
			<tr>
				<td><b>綽號</b></td>

				<td>{{ $data[0]->pname }}</td>
			</tr>
			<tr>
				<td><b>性別</b></td>
				<td>
					@if($data[0]->sex === 0)
						<p>男性</p>
					@elseif($data[0]->sex === 1)
						<p>女性</p>
					@else
						<p>不明</p>
					@endif
				</td>
			</tr>
			<tr>
				<td><b>個人簡介</b></td>
				<td>
					@if($data[0]->introduction==1)
					@else
						{{ $data[0]->introduction }}
					@endif
				</td>
			</tr>
			<tr>
				<td><b>專長、技能</b></td>
				<td>
					
				</td>
			</tr>
		</table>
		@if(Auth::id()===$user->profiles_uid)
			<a href="/profile/{{Auth::id()}}/edit">
				<div class="ui blue button" style="width:100%;">
					修改個人資料
				</div>
			</a>
		@endif
	</div>
@endsection