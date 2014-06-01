<!doctype html>
<html>
<head>

<script src="/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="/css/workstyle.css">
<title>新工作</title>
<?php 
	echo HTML::style('/css/semantic/packaged/css/semantic.min.css'); 
	echo HTML::style('/css/workstyle.css'); 
	echo HTML::script('/js/jquery.js');
	echo HTML::script('/css/workstyle.css');
	echo HTML::script('/jqueryui/js/jquery-ui-1.10.4.custom.min.js');
	echo HTML::style('/jqueryui/css/smoothness/jquery-ui-1.10.4.custom.min.css');
?>	

<script>
$(document).ready(function(){
	$("#datepick").datepicker();

	$('#alert1').hide();
	$('#alert2').hide();
	$('#alert3').hide();
	var checkSubmit1 = false;
	var checkSubmit2 = false;
	var checkSubmit3 = false;
	$('#ui1').blur(function(){
		if($('#ui1').val()===""){
			$('#alert1').fadeIn();
			checkSubmit1 = false;
		}else{ 
			$('#alert1').fadeOut();
			checkSubmit1 = true;
		}
	});
	$('#ui2').blur(function(){
		if($('#ui2').val()===""){
			$('#alert2').fadeIn();
			checkSubmit2 = false;
		}else{
			$('#alert2').fadeOut();
			checkSubmit2 = true;
		}
	});
	$('#datepick').blur(function(){
		if($('#datepick').val()===""){
			$('#alert3').fadeIn();
			checkSubmit3 = false;
		}else{
			$('#alert3').fadeOut();
			checkSubmit3 = true;
		}
	});
	$('#submit').click(function(){
		if($('#ui1').val()===""){
			$('#alert1').fadeIn();
			checkSubmit1 = false;
		}else{ 
			$('#alert1').fadeOut();
			checkSubmit1 = true;
		}
		if($('#ui2').val()===""){
			$('#alert2').fadeIn();
			checkSubmit2 = false;
		}else{
			$('#alert2').fadeOut();
			checkSubmit2 = true;
		}
		if($('#datepick').val()===""){
			$('#alert3').fadeIn();
			checkSubmit3	 = false;
		}else{
			$('#alert3').fadeOut();
			checkSubmit3 = true;
		}
		if( checkSubmit1 === false || checkSubmit2 === false || checkSubmit3 === false){
			alert('請再檢查一次輸入的資料是否齊全!');
		}else{
			// confirm('確定填寫完成?');
			$('.ui.fluid.form').submit();
		}
	});
});
</script>

</head>

<body>
	<header>
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
		  	<!-- <button></button> -->
		  	<div class="right menu">
		  		<a class="item">
	    			<i class="bell outline icon"></i>訊息
	  			</a>
		  		<a class="item">
	    			<i class="user icon"></i>關於我
	  			</a>
	  			<a class="item">
	    			<i class="sign out icon"></i>登出
	  			</a>
			</div>
		</div>
	</header>


	<!--Input part-->
	<form action="work" method="POST" class="ui fluid form" enctype="multipart/form-data">
		<div class="four wide column">
			<div id="inputbox" class="ui warning form segment">
				<h2>新增任務</h2>
  				<div class="field">
    				<label>工作名稱</label>
    				<div id="input1" class="ui input focus">
      					<input name="workName" id="ui1" placeholder="Work name" type="text">
      					<div class="ui corner label">
        					<i class="icon asterisk"></i>
      					</div>
    				</div>
    				<p id="alert1">請輸入名稱</p>
  				</div>
  				<div class="field">
    				<label>相關圖片</label>
    				<div id="input2" class="ui input focus">
      					<input name="image" id="ui2" type="file">
      					<div class="ui corner label">
        					<i class="icon asterisk"></i>
      					</div>
    				</div>
    				<p id="alert2">請上傳圖片</p>
  				</div>
  				<div class="ui form">
  					<div  class="field">
    					<label>工作敘述</label>
    					<textarea name="discription"></textarea>
  					</div>
				</div>
  				<div class="field">
    				<label>獎賞</label>
    					<div class="ui input">
      						<input name="reward" type="text">
      							<div class="ui corner label">
        							<i class="icon asterisk"></i>
      							</div>
    					</div>
  				</div>
  				<div class="field">
    				<label>結案時間</label>
    					<div id="input3" class="ui input">
      						<input name="date" id="datepick" tyep="text">
      							<div class="ui corner label">
        							<i class="icon asterisk"></i>
      							</div>
    					</div>
    					<p id="alert3">請選擇時間</p>
  				</div>
				<div id="submit" class="ui black submit button" >提交</div>
			</div>
		</div>
	</form>

</body>
</html>