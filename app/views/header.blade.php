<div class="ui blue inverted menu" style="background-color: #1987FF">
	<a class="active item" href="/home">
		<i class="home icon"></i> T-MAN
	</a>

	<div class="right menu">
		@if(Auth::check())
			<div class="ui dropdown item">
				<i class="user icon"></i>
      			關於我 
	      		<i class="dropdown icon"></i>
	      		<div class="menu">
			        <a class="item" href='/user/{{Auth::id()}}'>個人頁面</a>
			        <a class="item" href="/logout">登出</a>
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