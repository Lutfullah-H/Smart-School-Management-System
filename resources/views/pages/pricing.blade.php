<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Smart School Pricing</h1>

	@foreach($plans as $plan)

	<h2> {{ $plan['name'] }} </h2>

	<p>Price: {{ $plan['price'] }}$ </p>

	@endforeach
</body>
</html>