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
					<div class="ui error message">請登入在進行操作:)</div>
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

<div class="ui creatework modal">
	<i class="close icon"></i>
	<form action="/work" method="POST" class="ui fluid form" enctype="multipart/form-data">
		<div class="four wide column">
			<div id="inputbox" class="ui warning form segment">
				<h2>新增任務</h2>
		  		<div class="field">
		    		<label>工作名稱</label>
		    		<div id="input1" class="ui input focus">
		      			<input name="workName" id="ui1" placeholder="Work name" type="text">
		    		</div>
		  		</div>
		  		<div class="field">
		    		<label>相關圖片</label>
		    		<div id="input2" class="ui input focus">
		      			<input name="image" id="ui2" type="file">
		    		</div>
		  		</div>
		  		<div class="ui form">
		  			<div  class="field">
		    			<label>工作敘述</label>
		    			<textarea type="text" name="description" style="height:2em;"></textarea>
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
		  		</div>
		  		<div class="field">
		  			<label>Tag</label>
		  			<div class="model_checkbox">
			  			<div class="ui checkbox">
							<input type="checkbox" name="skill1">
							<label>電腦</label>
						</div>
						<div class="ui checkbox">
							<input type="checkbox" name="skill2">
							<label>語文</label>
						</div>
						<div class="ui checkbox">
							<input type="checkbox" name="skill3">
							<label>運動</label>
						</div>
						<div class="ui checkbox">
							<input type="checkbox" name="skill4">
							<label>美術</label>
						</div>
						<div class="ui checkbox">
							<input type="checkbox" name="skill5">
							<label>行政</label>
						</div>
						<div class="ui checkbox">
							<input type="checkbox" name="skill6">
							<label>其他</label>
						</div>
					</div>
		  		</div>
				<div id="submit" class="ui black submit button" style="width:100%">提交</div>
			</div>
		</div>
	</form>
</div>
