<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Framework</title>
	<!-- CSS base files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<!--<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}"/>-->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<!-- Boostrap Material Design CSS files -->
	<link rel="stylesheet" href="{{ asset('css/material.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/material-wfont.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/ripples.min.css') }}"/>
	<!-- Your Custom CSS file -->
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}"/>
</head>
<body>

	<div class="container">
		<div class="jumbotron text-center">
			<h1>You have arrived.</h1>
			<div class="row">
				<img src="{{ asset('images/laravel_logo.png') }}" alt="Logo" width="200" height="200"/>
			</div>
			<div class="row myrow">
				<p>This template Includes</p>
					<li>Boostrap 3.0.2</li>
					<li>Font Awesome 4.3.0</li>
					<li>jQuery 2.1.3</li>
					<li>Boostrap Material Design 0.2.2</li>
			</div>
		</div>
		
	</div>

	<!-- JS base files -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Boostrap Material Design JS files -->
	<script src="{{ asset('js/material.min.js') }}"></script>
	<script src="{{ asset('js/ripples.min.js') }}"></script>
</body>
</html>
