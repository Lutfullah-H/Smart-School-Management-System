@extends('layouts.app')

@section('content')

@include('partials.hero')

<p>Version: {{ $version }}</p>

<p>Academic Year: {{ $academicYear }}</p>


@endsection