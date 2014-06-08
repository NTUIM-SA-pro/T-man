<!doctype html>
<html>
	<head>
		@include('head')
	</head>
	<body>
		<header id="header">
			@include('header')
		</header>
		<div id="main">
			@yield('content')
		</div>
		@include('model')
</body>
</html>