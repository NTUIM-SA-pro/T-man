@extends('layouts.default')
@section('content')
	<div id='left-container'>
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
								<div class="profile-btn" style="background-color:#00cbe9;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">我接的案</div>
							</div>
							<div class="field">
								<div class="profile-btn" style="background-color:#fd8a33;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">我發的案</div>
							</div>
							<div class="field">
								<div class="profile-btn" style="background-color:#8bc53f;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">歷史記錄</div>
							</div>
							<div class="field">
								<div class="profile-btn" style="background-color:#ff82b5;color:white;border:none;box-shadow: 1px 1px 1px #aaa;">個人資料</div>
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
		<div class = "row">
			<div class="three column stackable ui grid">
				<div class="column">
					<div class="ui segment">
						<div class="ui dimmer">
							<div class="content">
								<div class="task-desc">
									<p >敘述：</p>
									<p>幫助警察建立工會blablabla^____^</p>
									<p>協助警察建立良好工作環境</p>
								</div>
								<div class="task-choose">
									<a class="ui green button" style="width:200px;text-align:center;">接任務</a>
								</div>
							</div>
						</div>
						<div class="task-label">HOT</div>
						<div class="field">
							<img class="head-profile" src="img/police.jpg"/>
						</div>
						<div class="field">
							<div class="task-title">事情：幫忙警察組工會</div>
						</div>
						<div class="field">
							<div class="task-title">發起人：洨魯</div>
						</div>
						
						<div class="field">
							<div class="task-date">5/21</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui segment">
						<div class="ui dimmer">
							<div class="content" >
								<div class="task-desc">
									<p >敘述：</p>
									<p>徵求正妹伴遊政大</p>
									<p>哥有30cm^__^</p>
								</div>
								<div class="task-choose">
									<a class="ui green button" style="width:200px;text-align:center;">接任務</a>
								</div>
							</div>
						</div>
						<div class="field">
							<img class="head-profile" src="img/ccty.jpg"/>
						</div>
						<div class="field">
							<div class="task-title">事情：陪我去政大</div>
						</div>
						<div class="field">
							<div class="task-title">發起人：洨帥</div>
						</div>
						
						<div class="field">
							<div class="task-date" >5/21</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui segment">
						<div class="field">
							<img class="head-profile" src="img/police.jpg"/>
						</div>
						<div class="field">
							<div class="task-title">事情：幫忙警察組工會</div>
						</div>
						<div class="field">
							<div class="task-title">發起人：洨魯</div>
						</div>
						
						<div class="field">
							<div class="task-date">5/21</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "row">
				<div class="three column stackable ui grid">
					<div class="column">
						<div class="ui segment">
							<div class="field">
								<img class="head-profile" src="img/ccty.jpg"/>
							</div>
							<div class="field">
								<div class="task-title">事情：陪我去政大</div>
							</div>
							<div class="field">
								<div class="task-title">發起人：洨帥</div>
							</div>
							<div class="field">
								<div class="task-date">5/23</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="ui segment">
							<div class="field">
								<img class="head-profile" src="img/penis.jpg"/>
							</div>
							<div class="field">
								<div class="task-title">事情：幫我領獎</div>
							</div>
							<div class="field">
								<div class="task-title">發起人：洨小魯</div>
							</div>
							
							<div class="field">
								<div class="task-date">5/21</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="ui segment">
							<div class="field">
								<img class="head-profile" src="img/police.jpg"/>
							</div>
							<div class="field">
								<div class="task-title">事情：幫忙警察組工會</div>
							</div>
							<div class="field">
								<div class="task-title">發起人：洨魯</div>
							</div>
							
							<div class="field">
								<div class="task-date">5/21</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	</article>

	<div class="ui register modal" style="width:60%;margin-left:-30%;">
		<i class="close icon"></i>
		<div class="header">
			註冊
		</div>
		<div class="content">
				<form id='register_form' action="register" method="POST">
				<div class="ui form" >

					<div class="field register" >
						<label>帳號</label>
						<input type="text" name="account" placeholder="請使用有效的Email">
					</div>
					<div class="field register">
						<label>密碼</label>
						<input type="password" name="password" placeholder="請使用四位數以上的密碼">
					</div>
					<div class="field register" >
						<label>請再輸入一次</label>
						<input type="password" name="checkPassword" placeholder="請使用四位數以上的密碼">
					</div>
					
					<div class="field"  >
						<div class="ui positive right labeled icon submit button ok" style="width:49%;">
							OK
							<i class="checkmark icon"></i>
						</div>
						<div class="ui black button cancel" style="width:49%;">
							Cancel
						</div>
			
					</div>
					<!-- <div class="ui error message"></div> -->
				</div>
				</form>
		</div>
	</div>

	<div class="ui signin modal" style="width:60%;margin-left:-30%;">
		<i class="close icon"></i>
		<div class="header">
			登入
		</div>
		<div class="content">
				<form id='signin_form' action="signin" method="POST">
				<div class="ui form" >

					<div class="field register" >
						<label>帳號</label>
						<input type="text" name="account" placeholder="請使用有效的Email">
					</div>
					<div class="field register">
						<label>密碼</label>
						<input type="password" name="password" placeholder="請使用四位數以上的密碼">
					</div>
					
					<div class="field"  >
						<div class="ui positive right labeled icon submit button ok" style="width:49%;">
							登入
							<i class="checkmark icon"></i>
						</div>
						<div class="ui black button cancel" style="width:49%;">
							Cancel
						</div>
			
					</div>
					<!-- <div class="ui error message"></div> -->
				</div>
				</form>
		</div>
	</div>
@stop