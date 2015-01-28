@extends('layouts.master')

<?php $forms = Auth::user()->forms; ?>

@section('content')
    <h2>Dashboard</h2>

    <a role="button" class="btn btn-primary"><i class="fa fa-plus"></i> Create a new form</a>

    <h3>Your forms</h3>

    @if ($forms->count() > 0)
        @foreach ($forms as $form)
            {{ $form->title }}
            {{ $form->description }}
        @endforeach
    @else
        <p>Looks like you haven't created any forms! How about <a href="{{ route('form.create') }}">creating a new form</a>?</p>
    @endif
@stop