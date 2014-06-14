@extends('layouts.default')
@section('content')
	<div id='left-container'>
		<div class = "row">
			<div class="one column stackable ui grid" >
				<div class="column">
					<div class="ui segment" style="border: 1px solid #ababab;">
						<div class="field">
							<img class="head-profile"src="{{$user->profiles_img}}"/>
						</div>
						
						<div class="field">
							<div class="profile-name">{{$user->pname}}
							</div>
						</div>
						@if(isset($msg))
							<div class="field" style="text-align:center; margin-top:15px;">
								<a href='/profile/{{Auth::id()}}/editphoto' class="ui teal button">更改相片</a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class = "row">
			<div class="one column stackable ui grid">
				<div class="column">
					<div class="ui segment" style="border: 1px solid #ababab;">
						<div style="text-align: center; font-size:22px;font-weight: bold;" class="field">
							<span>選擇項目</span>
						</div>
						<!-- 個人資料 -->
						@if(Auth::id()===$user->profiles_uid)
							<div class="field">
								<a href="/profile/{{$user->profiles_uid}}"><div class="profile-btn" style="background-color:#ff82b5;">個人資料</div></a>
							</div>
							<div class="field">
								<div class="profile-btn post" style="background-color:#58CB73;">發案</div>
							</div>
							<div class="field">
								<a href="/work/{{$user->profiles_uid}}">
								<div class="profile-btn" style="background-color:#00cbe9;">我接的案</div>
							</div>
							<div class="field">
								<a href="/user/{{$user->profiles_uid}}"><div class="profile-btn" style="background-color:#fd8a33;">我發的案</div></a>
							</div>
						<!-- 他人資料 -->
						@else
							<div class="field">
								<a href="/profile/{{$user->profiles_uid}}"><div class="profile-btn" style="background-color:#ff82b5;">{{$user->pname}}的資料</div></a>
							</div>
							<div class="field">
								<a href="/user/{{$user->profiles_uid}}">
								<div class="profile-btn" style="background-color:#00cbe9;">{{$user->pname}}接的案</div>
							</div>
							<div class="field">
								<a href="/user/{{$user->profiles_uid}}"><div class="profile-btn" style="background-color:#fd8a33;color:white;">{{$user->pname}}發的案</div></a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="right-container">
		@yield('right-container')
	</div>
@stop

