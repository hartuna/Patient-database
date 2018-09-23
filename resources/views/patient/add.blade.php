@extends('master')
@section('content')
<h1>{{ $header }}</h1>
{!! Form::open(['url'=>'list']) !!}
	<div class="formLeft">
		{!! Form::label('name', 'Imię:') !!}
		{!! Form::label('surname', 'Nazwisko:') !!}
		{!! Form::label('doctor', 'Lekarz prowadzący:') !!}
		{!! Form::label('pesel', 'PESEL:') !!}
		{!! Form::label('phone', 'Telefon:') !!}
		{!! Form::label('email', 'Email:') !!}
	</div>
	<div class="formRight">
		{!! Form::text('name', null, ['class'=>'inputText']) !!}
		{!! Form::text('surname', null, ['class'=>'inputText']) !!}
		{!! Form::select('doctor', array(1, 2), null, ['class'=>'inputText']) !!}
		{!! Form::text('pesel', null, ['class'=>'inputText']) !!}
		{!! Form::text('phone', null, ['class'=>'inputText']) !!}
		{!! Form::text('email', null, ['class'=>'inputText']) !!}
	</div>
	<div class="clear"></div>
	{!! Form::submit('Dodaj pacjenta', ['class'=>'formButton']) !!}
	<div class="clear"></div>
{!! Form::close() !!}
@stop