@extends('master')
@section('content')
<h1>{{ $patient->name }} {{ $patient->surname }}</h1>
<div class="patient">
	<div class="dataPatient">
		<p>{{ $patient->doctor }}</p>
	</div>
	<div class="clear"></div>
	<h2>Historia wizyt</h2>
</div>
@stop