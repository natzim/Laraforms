@extends('layouts.master')

@section('content')
    <h2>Sign up</h2>

    {!! Form::open(['route' => 'user.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Username') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Sign up', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@stop