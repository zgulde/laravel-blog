<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	@include('partials.navbar')
	<ul>
		<li><a href="{{ action('HomeController@rollDice', 1) }}">Roll 1</a></li>
		<li><a href="{{ action('HomeController@rollDice', 2) }}">Roll 2</a></li>
		<li><a href="{{ action('HomeController@rollDice', 3) }}">Roll 3</a></li>
		<li><a href="{{ action('HomeController@rollDice', 4) }}">Roll 4</a></li>
		<li><a href="{{ action('HomeController@rollDice', 5) }}">Roll 5</a></li>
		<li><a href="{{ action('HomeController@rollDice', 6) }}">Roll 6</a></li>
	</ul>
</body>
</html>
