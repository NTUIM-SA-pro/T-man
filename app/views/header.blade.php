<div class="ui blue inverted menu">
	<a class="item" href="/home"style="border-right:1px solid #cfcfcf;">
		<i class="home icon"></i> T-MAN
	</a>

	<div class="right menu">
		@if(Auth::check())
			<div class="ui dropdown item" style="border-left:1px solid #cfcfcf;z-index:999;">
				<i class="user icon"></i>
      			關於我 
	      		<i class="dropdown icon"></i>
	      		<div class="menu">
			        <a class="item" href='/user/{{Auth::id()}}'>個人頁面</a>
			        <a class="item" href="/logout">登出</a>
      			</div>
    		</div>
			
			<a class="item logout" href="/logout" style="border-left:1px solid #cfcfcf;">
				<i class="sign out icon"></i>登出
			</a>
			
		@else
			
			<a class="item register" style="border-left:1px solid #cfcfcf;">
				<i class="user icon"></i>註冊
			</a>
			<a class="item login" style="border-left:1px solid #cfcfcf;">
				<i class="sign in icon"></i>登入
			</a>

		@endif
		
		
	</div>
</div>