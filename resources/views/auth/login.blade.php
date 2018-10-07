@extends('master')
@section('content')
<h1>Logowanie</h1>
<div id="errors">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="formLeft">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::label('password', 'Hasło:') !!}
    </div>
    <div class="formRight">
        {!! Form::email('email', null, ['class'=>'inputText']) !!}
        {!! Form::password('password', ['class'=>'inputText']) !!}
    </div>
    <div class="clear"></div>
    {!! Form::submit('Zaloguj', ['class'=>'formButton']) !!}
    <div class="clear"></div>
</form>
@endsection
