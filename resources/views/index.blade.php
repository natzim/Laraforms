@extends('layouts.master')

@section('content')
    <h1>Laraforms</h1>
    <p class="lead">Laraforms is a simple form and survey creator with minimalism and speed in mind.</p>
    <div class="text-center">
        @if (Auth::check())
            <a href="{{ route('index') }}" class="btn btn-primary btn-lg" role="button">Get started!</a>
        @else
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-lg" role="button">Get started!</a>
        @endif
    </div>
@stop