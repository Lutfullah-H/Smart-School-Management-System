@extends('layouts.app')

@section('content')

<h1>Smart School Features</h1>
	
<ul>
	@foreach($features as $feature)
		<li> {{ $feature }} </li>
	@endforeach
</ul>

@endsection