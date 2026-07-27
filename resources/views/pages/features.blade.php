<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Smart School Features</h1>
	
	<ul>
		@foreach($features as $feature)
		<li> {{ $feature }} </li>
		@endforeach
	</ul>

</body>
</html>