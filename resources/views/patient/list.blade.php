@extends('master')
@section('content')
<h1>{{ $header }}</h1>
@foreach ($patients as $patient)
<div class="patient">
	<p>Imię: {{ $patient->name }}</p>
	<p>Nazwisko: {{ $patient->surname }}</p>
	<p>Lekarz prowadzący: {{ $patient->doctor }}</p>
</div>
@endforeach
@stop