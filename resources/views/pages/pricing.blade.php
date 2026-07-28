@extends('layouts.app')

@section('content')

<h1>Smart School Pricing</h1>

@foreach($plans as $plan)

	<h2> {{ $plan['name'] }} </h2>
	<p>Price: {{ $plan['price'] }}$ </p>

@endforeach


@endsection