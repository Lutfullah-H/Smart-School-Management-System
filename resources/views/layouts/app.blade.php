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

@include('partials.navbar')

<hr>

<main>
	@yield('content')
</main>

<hr>

@include ('partials.footer')

</body>
</html>