<div class="ui register modal" style="width:60%;margin-left:-30%;">
		<i class="close icon"></i>
		<div class="header">
			註冊
		</div>
		<div class="content">
				<form id='register_form' action="register" method="POST">
					<div class="ui form" >
						<div class="field register" >
							<label>綽號</label>
							<input type="text" name="nickname" placeholder="在T-man上使用的名稱">
						</div>
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
							<input type="password" name="password-again" placeholder="請使用四位數以上的密碼">
						</div>
						
						<div class="field"  >
							<div class="ui positive right labeled icon submit button ok" style="width:49%;">
								OK
								<i class="checkmark icon"></i>
							</div>
							<input type="reset"class="ui black button cancel" style="width:49%;" value="reset">
				
						</div>

					</div>
				</form>
		</div>
	</div>

	<div class="ui login modal" style="width:60%;margin-left:-30%;">
		<i class="close icon"></i>
		<div class="header">
			登入
		</div>
		<div class="content">
				<form id='login_form' action="login" method="POST">
				<div class="ui form" >

					<div class="field register" >
						<label>帳號</label>
						<input type="text" name="account" placeholder="請使用有效的Email">
					</div>
					<div class="field register">
						<label>密碼</label>
						<input type="password" name="password" placeholder="請使用四位數以上的密碼">
						
					</div>
					<div class="ui error message"></div>
					<div class="field"  >
						<div class="ui positive right labeled icon submit button ok" style="width:49%;">
							登入
							<i class="checkmark icon"></i>
						</div>
						<input type="reset"class="ui black button cancel" style="width:49%;" value="reset">
			
					</div>
					
				</div>
				</form>
		</div>
	</div>


	<div class="ui creatework modal">
		<i class="close icon"></i>

			<form action="/createNewWork" method="POST" class="ui fluid form" enctype="multipart/form-data">
				<div class="four wide column">
					<div id="inputbox" class="ui warning form segment">
						<h2>新增任務</h2>
		  				<div class="field">
		    				<label>工作名稱</label>
		    				<div id="input1" class="ui input focus">
		      					<input name="workName" id="ui1" placeholder="Work name" type="text">
		    				</div>
		    				<p id="alert1">請輸入名稱</p>
		  				</div>
		  				<div class="field">
		    				<label>相關圖片</label>
		    				<div id="input2" class="ui input focus">
		      					<input name="image" id="ui2" type="file">
		    				</div>
		    				<p id="alert2">請上傳圖片</p>
		  				</div>
		  				<div class="ui form">
		  					<div  class="field">
		    					<label>工作敘述</label>
		    					<textarea type="text" name="description"></textarea>
		  					</div>
						</div>
		  				<div class="field">
		    				<label>獎賞</label>
		    					<div class="ui input">
		      						<input name="reward" type="text">
		    					</div>
		  				</div>
		  				<div class="field">
		    				<label>結案時間</label>
		    					<div id="input3" class="ui input">
		      						<input name="date" id="datepick" tyep="text">
		    					</div>
		    					<p id="alert3">請選擇時間</p>
		  				</div>
						<div id="submit" class="ui black submit button">提交</div>
					</div>
				</div>
			</form>
	</div>