@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'user.authenticate']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Username') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Sign in', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop