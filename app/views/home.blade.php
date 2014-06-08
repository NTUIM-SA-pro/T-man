@extends('layouts.default')
@section('content')
	<div id='left-container'>
	<a href="/user/{{Auth::id()}}/task">1221</a>
			<div class = "row">
				<div class="one column stackable ui grid" >
					<div class="column">
						<div class="ui segment" style="border: 1px solid #ababab;">
							<div class="field">
								<img class="head-profile"src="img/handsome.jpg"/>
							</div>
							<div class="field">
								<div class="profile-name">
									<?php 
										if(defined($user)){
											echo $user->name;
										}
										else{
											echo '台大資管<span style="margin-left:20%;">小帥</span>';
										}
									?>
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
		<div class="filter-task"><span>Filter</span>
			<hr/>
			<div class="ui selection dropdown" style="padding:4 15 4 15;margin-left: 10px;opacity: 1;">
				<input type="hidden" name="gender">
				<div class="default text">Gender</div>
				<i class="dropdown icon"></i>
				<div class="menu">
					<div class="item" data-value="1">Male</div>
					<div class="item" data-value="0">Female</div>
				</div>
			</div>
		</div>
		@yield('right-container')
	</div>


	
@stop