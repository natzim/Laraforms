@extends('layouts.master')

@section('content')
    <h2>Sign in</h2>

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

    <p>Haven't got an account? How about <a href="{{ route('user.create') }}">signing up</a>?</p>
@stop