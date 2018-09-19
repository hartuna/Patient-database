@extends('master')
@section('content')
<h1>{{ $header }} - wyszukano: {{ count($patients) }}</h1>
@foreach($patients as $patient)
<div class="patient">
	<div class="dataName">
		<p>Imię</p>
		<p>Nazwisko</p>
		<p>Lekarz prowadzący</p>
	</div>
	<div class="dataPatient">
		<p>{{ $patient->name }}</p>
		<p>{{ $patient->surname }}</p>
		<p>{{ $patient->user->name }}</p>
	</div>
	<a href="{{ url('list', $patient->id) }}"><button class="details">Szczegóły</button></a>	
	<div class="clear"></div>
</div>
@endforeach
@stop