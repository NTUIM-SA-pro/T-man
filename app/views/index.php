<html>
<head>
	<meta charset="utf-8">
	<title>T-MAN</title>
	<!-- <link rel="stylesheet" type="text/css" href="semantic/packaged/css/semantic.css">
  	<script src="jquery.js"></script> -->
  	<?php echo HTML::style('../public/css/semantic/packaged/css/semantic.css'); ?>

  	<?php echo HTML::script('../public/js/jquery.js'); ?>
  	<?php echo HTML::script('../public/css/semantic/packaged/javascript/semantic.js'); ?>
  	<!-- <script src="semantic/packaged/javascript/semantic.js"></script> -->
 <style>
 body{
 	font-family: "微軟正黑體", "Microsoft JhengHei", "新細明體", "PMingLiU", "細明體", "MingLiU", "標楷體", "DFKai-sb", serif;
 	/*background-color: #fafaf6;*/
 	padding: 0;
 	margin: 0;
 }
 article{
 	padding-left: 20px;
 	padding-top: 5px;
 }
 .profile{
 	width: 25%;
 	float: left;
 	margin-top: 40px;

 }
/* .profile:after {
  content: '';
  width: 0;
  height: 70%;
  position: absolute;
  border: 1px solid black;
  top: 20%;
  left: 27%;
}*/
 .head-profile{
 	width: 100%;
 	height: 200px;
 	border-radius: 5px;
 }
 .profile-name{
 	margin-right: auto;
 	margin-left: auto;
 	display: block;
 	width: 70%;
 	margin-top: 10px;
 }
 .profile-btn{
 	width: 80%;
 	display: block;
 	border: 1px solid #007aff;
 	color: #007aff;
 	font-size: 18px;
 	cursor: pointer;
 	margin-right: auto;
 	margin-left: auto;
 	border-radius: 4px;
 	text-align: center; 
 	margin-top: 15px;
 	padding: 2px;
 	letter-spacing: 2px;
 	transition: 0.5s;
 }
 .profile-btn:hover{
 	color: #0045ff;
 }
 .main{
 	width: 70%;
 	padding-left: 30px;
 	padding-top: 10px;
 	display: inline-block;

 }
 .filter-task{
 	width: 100%;

 }
 .filter-task span{
 	font-size: 20px;
 	font-weight: bold;
 	color: #4a4a4a;

 }
 .ui.segment{
 	position: relative;
 }
 .task-label{
 	position: absolute;
 	font-family: Helvetica, Arial, sans-serif;
 	left: 60%;
 	text-align: center;
    display: inline-block;
    color: white;
    width: 38%;
    /*width: 95px;*/
    top: 10%;
    background-color: rgba(163,82,0,0.9);
    font-size: 23px;
    padding: 5px;
    border: none;
    transform:rotate(45deg);
	-ms-transform:rotate(45deg); 
	-webkit-transform:rotate(45deg);
 }
 .task-label:before {
    display: inline-block;
    border: 18px solid;
    border-color: transparent rgba(163,82,0,0.9) rgba(163,82,0,0.9) transparent;
    left: -35px;
    height: 0;
    width: 0;
    position: absolute;
    top: 0;
    content: "";
    display: inline-block;
}
 .task-label:after {
    display: inline-block;
    border: 18px solid;
    border-color: transparent transparent rgba(163,82,0,0.9) rgba(163,82,0,0.9);
    height: 0;
    width: 0;
    position: absolute;
    right: -35px;
    top: 0;
    content: "";
    display: inline-block;
}
.task-date{

	font-family: Helvetica, Arial, sans-serif;
    background: #ff9933;
    float: right;
    display: inline-block;
    color: #fff;
    width: 35px;
    position: relative;
    padding: 7px;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    margin: 0 20px 0 0;
    text-decoration: none;
    -webkit-transition:  .5s; 
	transition:  .5s;
}

.task-date:hover {
    width: 40px;
}
.task-date:after {
    display: inline-block;
    border: 16px solid;
    border-color: transparent transparent transparent #ff9933;
    height: 0;
    width: 0;
    position: absolute;
    right: -31px;
    top: 0;
    content: "";
    display: inline-block;
}
 
 .task-title{
 	font-size: 16px;
 	margin-top: 5px;
 }

 .task-desc{
 	position: absolute;
 	text-align: left;
 	top: 3%;
 	height: 70%;
 	left: 10%;
 	width: 90%;
 	/*border: 1px solid white;*/

 }
 .task-choose{
 	position: absolute;
 	left: 50%;

 	margin-left: -100px;
 	bottom: 10%;
 }

 </style>
 <script>
 	$(document).ready(function(){
 		$('.ui.dropdown').dropdown();
 		$('.ui.dimmer').dimmer({on: 'hover'});
 		$('a.item.signout').click(function(){
 			$('.test.modal').modal('show');
 		});
 		$('.button.ok').click(function(){
 			var a1 = $("input[name='test1']").val();
 			var a2 = $("input[name='test2']").val();
 			var a3 = $("input[name='test3']").val();
 			console.log(a1+' '+a2+ ' '+a3);
 			$.ajax(
 			{
 				type: "POST",
 				url: "test",
 				data: {test1:a1,test2:a2,test3:a3}
 				
 			});


 		})

 	})
 	
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
	  			<a class="item signout">
	    			<i class="sign out icon"></i>登出
	  			</a>
			</div>
		</div>
	</header>
	<article>
		<div class='profile'>
			<div class = "row">
			<div class="one column stackable ui grid" >
	  			<div class="column">
	    			<div class="ui segment" style="border: 1px solid #ababab;">
	    				<div class="field">
	      					<img class="head-profile"src="../public/img/handsome.jpg"/>
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
		      					<div class="profile-btn" style="background-color:#00cbe9;color:white;border:none;box-shadow: 3px 3px 3px #aaa;">我接的案</div>
		      				</div>
		      				<div class="field">
		      					<div class="profile-btn" style="background-color:#fd8a33;color:white;border:none;box-shadow: 3px 3px 3px #aaa;">我發的案</div>
		      				</div>
		      				<div class="field">
		      					<div class="profile-btn" style="background-color:#8bc53f;color:white;border:none;box-shadow: 3px 3px 3px #aaa;">歷史記錄</div>
		      				</div>
		      				<div class="field">
		      					<div class="profile-btn" style="background-color:#ff82b5;color:white;border:none;box-shadow: 3px 3px 3px #aaa;">個人資料</div>
		      				</div>
		    			</div>
		  			</div>
		  		</div>
			</div>

		</div>
		</div>
		<div class="main">
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
			      					<img class="head-profile" src="{{asset('img/police.jpg')}}"/>

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
<!-- <div class="test model">
	<form action="test" method="POST">
	<div class="ui form">
	  <div class="field">
	    <label>User Input</label>
	    <input type="text" name="test">
	    <input type="submit">
	  </div>
	</div>
	</form>
</div> -->
<div class="ui test modal">
    <i class="close icon"></i>
    <div class="header">
      	註冊
    </div>
    <div class="content">
    	<form id="form">
			<div class="ui form">
	  			<div class="field" style="width:50%;">
				    <label>User Input</label>
				    <input type="text" name="test1">
	  			</div>
	  			<div class="field" style="width:50%;">
				    <label>User Input</label>
				    <input type="text" name="test2">
	  			</div>
	  			<div class="field" style="width:50%;">
				    <label>User Input</label>
				    <input type="text" name="test3">
	  			</div>
			</div>
		</form>
    </div>
    <div class="actions">
      <div class="ui black button">
        Cancel
      </div>
      <div class="ui positive right labeled icon button ok">
        OK
        <i class="checkmark icon"></i>
      </div>
    </div>
  </div>
</body>
</html>