@extends('layouts.master')

@section('content')
    <h2>Dashboard</h2>

    <a role="button" class="btn btn-primary"><i class="fa fa-plus"></i> Create a new form</a>

    <h3>Your forms</h3>

    @foreach (Auth::user()->forms as $form)
        {{ $form->title }}
        {{ $form->description }}
    @endforeach
@stop