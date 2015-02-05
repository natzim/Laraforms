@extends('layouts.master')

@section('content')
    <h2>Sign in</h2>

    <form action="{{ route('user.authenticate') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" id="remember"> Remember me
                </label>
            </div>
        </div>

        <button class="btn btn-primary">Sign in</button>
    </form>

    <p>Haven't got an account? How about <a href="{{ route('user.create') }}">signing up</a>?</p>
@stop