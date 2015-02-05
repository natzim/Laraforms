@extends('layouts.master')

@section('content')
    <h2>Sign up</h2>

    <form action="{{ route('user.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">Username</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        @if ($errors->has('name'))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->get('name') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>

        @if ($errors->has('password'))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->get('password') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <button class="btn btn-primary">Sign up</button>
    </form>

    <p>Already have an account? How about <a href="{{ route('user.signin') }}">signing in</a>?</p>
@stop