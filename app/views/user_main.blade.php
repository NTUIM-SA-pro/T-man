@extends('layouts.default')
@section('content')
	<div id='left-container'>
	<a href="/test">1221</a>
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
								<div class="field">
								@if(Auth::check())
									<div class="field">
									<a class="fluid ui black button profile-btn post">發案</a></div>
								@endif
								</div>
									<a class="fluid ui green button">我接的案</a>
								</div>
								<div class="field">
									<a class="fluid ui blue button">我發的案</a>
								</div>
								<div class="field">
									<a class="fluid ui red button">歷史記錄</a>
								</div>
								<div class="field">
									<a class="fluid ui purple button">個人資料</a>
								</div>
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