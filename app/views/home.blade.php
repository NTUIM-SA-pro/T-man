@extends('layouts.default')
@section('content')
	<div id='left-container'>
	<a href="/test">1221</a>
			<div class = "row">
				<div class="one column stackable ui grid" >
					<div class="column">
						<div class="ui segment" style="border: 1px solid #ababab;">
							<div class="field">
								<img class="head-profile"src="img/handsome.jpg"/>
							</div>
							<div class="field">
								<div class="profile-name">台大資管<span style="margin-left:20%;">小帥</span>
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
							<div class="field">
							@if(Auth::check())
								<div class="field">
								<div class="profile-btn post" style="background-color:#00cbe9;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">發案</div></div>
							@endif
								<div class="profile-btn" style="background-color:#00cbe9;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">我接的案</div>
							</div>
							<div class="field">
								<div class="profile-btn" style="background-color:#fd8a33;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">我發的案</div>
							</div>
							<div class="field">
								<div class="profile-btn" style="background-color:#8bc53f;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">歷史記錄</div>
							</div>
							<div class="field">
								<a href="profile"><div class="profile-btn" style="background-color:#ff82b5;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">個人資料</div></a>
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
	</article>

	
@stop