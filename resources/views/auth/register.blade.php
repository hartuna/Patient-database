@extends('master')

@section('content')
<h1>Rejestracja</h1>
<div id="errors">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="formLeft">
        {!! Form::label('name', 'Imię i nazwisko:') !!}
        {!! Form::label('email', 'Email:') !!}
        {!! Form::label('password', 'Hasło:') !!}
        {!! Form::label('password_confirmation', 'Powtórz:') !!}
    </div>
    <div class="formRight">
        {!! Form::text('name', null, ['class'=>'inputText']) !!}
        {!! Form::email('email', null, ['class'=>'inputText']) !!}
        {!! Form::password('password', ['class'=>'inputText']) !!}
        {!! Form::password('password_confirmation', ['class'=>'inputText']) !!}
    </div>
    <div class="clear"></div>
    {!! Form::submit('Rejestruj', ['class'=>'formButton']) !!}
    <div class="clear"></div>
</form>
@endsection
