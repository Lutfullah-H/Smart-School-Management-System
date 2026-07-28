<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smart School Management System</title>
</head>
<body>

	<h2> {{ config('app.name') }} </h2>

	<hr>

	<a href=" {{ route('home') }} "> Home </a>
	<a href=" {{ route('about') }} "> About </a>
	<a href=" {{ route('features') }} "> Features </a>
	<a href=" {{ route('pricing') }} "> Pricing </a>
	<a href=" {{ route('contact') }} "> Contact </a>

	<hr>

	@yield('content')

	<hr>

	<p>© 2026 Smart School Management System</p>
</body>
</html>