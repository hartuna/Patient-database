@extends('master')
@section('content')
<h1>{{ $patient->name }} {{ $patient->surname }}</h1>
<div class="patient">
	<div class="dataName">
		<p>Lekarz prowadzący</p>
		<p>PESEL</p>
		<p>Telefon</p>
		<p>Email</p>
	</div>
	<div class="dataPatient">
		<p>{{ $patient->user->name }}</p>
		<p>{{ $patient->pesel }}</p>
		<p>{{ $patient->phone }}</p>
		<p>{{ $patient->email }}</p>
	</div>
	<a href="/list"><button class="details">Powrót</button></a>
	<div class="clear"></div>
	<h2>Historia wizyt</h2>
	@if(count($visits) == 0)
	<p>Brak archiwalnych zabiegów dla wybranego pacjenta</p>
	@endif
	@foreach($visits as $visit)
		<div class="visit">
		<div class="dataName">
			<p>{{ $visit->date }}</p>
		</div>
		<div class="dataPatient">
			<p>{{ $visit->title }}</p>
		</div>
		<div class="clear"></div>
	</div>
	@endforeach
</div>
@stop