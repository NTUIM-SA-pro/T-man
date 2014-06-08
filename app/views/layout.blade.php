<html>
<head>
	<meta charset='utf-8'>
	<title>T-MAN</title>
	<link rel="stylesheet" type="text/css" href="semantic/packaged/css/semantic.css">
  	<script src="jquery.js"></script>
  	<script src="semantic/packaged/javascript/semantic.js"></script>
<style>
body{
	margin: 0;
	padding: 0;
	position: fixed;
	overflow-y: auto;
	width: 100%;
	height: 100%;
}

#bg, #home-bg {
  background-image: url('img/weiling.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  /*background-size: 1080px 100%;*/
}
#bg {
  background-position: center -100px;
  padding: 8% 20% 25% 20%;
}
#home-container {
  position: relative;
}
#home-bg {
	/*background-size: 100% 100%;*/
  /* Absolutely position it, but stretch it to all four corners, then put it just behind #search's z-index */
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  z-index: 99;
  /* Pull the background 70px higher to the same place as #bg's */
  background-position: center -180px;
  background-size: 170% 200%;
  filter: blur(10px);
  -webkit-filter: blur(10px);
  -moz-filter: blur(10px);
  filter: url('/media/blur.svg#blur'); /* for Firefox */
}
#home {
  /* Put this on top of the blurred layer */
  height: 350px;
  position: relative;
  z-index: 100;
  padding: 20px;
  background: rgb(34,34,34); /* for IE */
  background: rgba(55,55,55,0.8);
}
@media (max-width: 600px ) {
  #bg { padding: 10px; }
  #home-bg { background-position: center -10px; }
}
.btn-container{
	/*border: 1px solid white;*/
	height: 100px;
	/*padding: 50 20 50 20;*/
	/*position: relative;*/
}
.col{
	width: 49%;
	height: 100%;
	/*border: 1px solid red;*/
	float: left;
	position: relative;
	/*padding: 20;*/
	letter-spacing: 5px;
}
.btn {
	position: absolute;
	top: 50%;
	left: 50%;
	/*font-weight: bold;*/
	border: 1px solid white;
	font-size: 20px;
	height: 40px;
	margin-left: -100px;
	margin-top: -25px;
	width: 200px;
	color: white;
	text-align: center;
	line-height: 40px;
	float: left;
	cursor: pointer;
	transition: 1s;
}
.btn:hover{
	border: 2px solid white;

}
#home{
	text-align: center;

	color: white;
}

 .title{
 	margin-bottom: 30px;

 	border-top: 2px solid white;
 	border-bottom: 2px solid white;
	/*height: 100px;*/
	line-height: 70px;
 }

</style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="bg">
  		<div id="home-container">
	    <div id="home-bg"></div>
		    <div id="home">
		    	<div class='title'>
		      		<h2>Be the best T-man in the world</h2>
		      	</div>
		      	<div class="btn-container">
		      		<div class='col'>
			      		<a class="btn">註冊</a>
			      	</div>
			      	<div class="col">
			      		<a class="btn">隨便逛逛</a>
			      	</div>
			  	</div>
			  	<div>
				  	<span>OR</span><br/>
					<a href='#'><img src='img/login_facebook_btn.png'/ style="width:400px;height:50px;margin-top:20px;"></a>
				</div>

	    	</div>
  		</div>
	</div>
</body>
</html>