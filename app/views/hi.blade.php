<html>
<head>
	<meta charset="utf-8">
	<title>T-MAN</title>
	<!-- <link rel="stylesheet" type="text/css" href="semantic/packaged/css/semantic.css">
  	<script src="jquery.js"></script> -->
  	<?php echo HTML::style('../public/css/semantic/packaged/css/semantic.css'); ?>
  	<?php echo HTML::style('../public/css/style.css'); ?>

  	<?php echo HTML::script('../public/js/jquery.js'); ?>
  	<?php echo HTML::script('../public/css/semantic/packaged/javascript/semantic.js'); ?>
  	<!-- <script src="semantic/packaged/javascript/semantic.js"></script> -->

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
	<header id="header">
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
	<article id = "main">
		<div id='left-container'>
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
			      					<img class="head-profile" src="../public/img/police.jpg"/>

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
			      					<img class="head-profile" src="../public/img/ccty.jpg"/>
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
			      					<img class="head-profile" src="../public/img/police.jpg"/>
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
			      					<img class="head-profile" src="../public/img/ccty.jpg"/>
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
			      					<img class="head-profile" src="../public/img/penis.jpg"/>
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
			      					<img class="head-profile" src="../public/img/police.jpg"/>
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