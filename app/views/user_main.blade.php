@extends('layouts.default')
@section('content')
	<div id='left-container'>
			<div class = "row">
				<div class="one column stackable ui grid" >
					<div class="column">
						<div class="ui segment" style="border: 1px solid #ababab;">
							<div class="field">
								<img class="head-profile"src="/{{$user->img}}"/>
							</div>
							<div class="field">
								<div class="profile-name">{{$user->name}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "row">
				<div class="one column stackable ui grid">
					<div class="column">
						<div class="ui segment" style="border: 1px solid #ababab;">
							<div style="text-align: center; font-size:22px;font-weight: bold;" class="field">
								<span>Dashboard</span>
							</div>
							@if(Auth::id()===$user->user_id)
								<div class="field">
									<a href="/user/{{$user->user_id}}/profile"><div class="profile-btn" style="background-color:#ff82b5;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">個人資料</div></a>
								</div>
								<div class="field">
									<div class="profile-btn post" style="background-color:#00cbe9;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">發案</div>
								</div>

								<div class="field">
									<div class="profile-btn" style="background-color:#00cbe9;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">我接的案</div>
								</div>
								<div class="field">
									<a href="/user/{{$user->user_id}}/task"><div class="profile-btn" style="background-color:#fd8a33;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">我發的案</div></a>
								</div>
							@else
								<div class="field">
									<a href="/user/{{$user->user_id}}/profile"><div class="profile-btn" style="background-color:#ff82b5;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">{{$user->name}}的資料</div></a>
								</div>

								<div class="field">
									<div class="profile-btn" style="background-color:#00cbe9;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">{{$user->name}}接的案</div>
								</div>
								<div class="field">
									<a href="/user/{{$user->user_id}}/task"><div class="profile-btn" style="background-color:#fd8a33;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">{{$user->name}}發的案</div></a>
								</div>
							@endif

							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="right-container">
		@yield('task_filter')
		@yield('right-container')
	</div>

	
@stop