@extends('layouts.master')

@section('content')
    <h2>Sign up</h2>

    {!! Form::open(['route' => 'user.store']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Username') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        @if ($errors->has('name'))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->get('name') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('password_confirmation', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        @if ($errors->has('password'))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->get('password') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        {!! Form::submit('Sign up', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <p>Already have an account? How about <a href="{{ route('user.signin') }}">signing in</a>?</p>
@stop