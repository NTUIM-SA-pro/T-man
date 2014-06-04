<div class="ui blue inverted menu" style="background-color: #1987FF">
	<a class="active item">
		<i class="home icon"></i> T-MAN
	</a>
	<a class="item">
		<i class="heart icon"></i> TASK
	</a>
	<a class="item">
		<i class="users icon"></i> T-men
	</a>
	<div class="right menu">
		@if(Auth::check())
			<a class="item">
				<i class="bell outline icon"></i>通知
			</a>
			<div class="ui dropdown item">
				<i class="user icon"></i>
      			關於我 
	      		<i class="dropdown icon"></i>
	      		<div class="menu">
			        <a class="item">個人頁面</a>
			        <a class="item">設定</a>
			        <a class="item">登出</a>
      			</div>
    		</div>
			
			<a class="item logout" href="/logout">
				<i class="sign out icon"></i>登出
			</a>
			
		@else
			
			<a class="item register">
				<i class="user icon"></i>註冊
			</a>
			<a class="item login">
				<i class="sign in icon"></i>登入
			</a>

		@endif
		
		
	</div>
</div>