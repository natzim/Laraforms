@extends('layouts.master')

@section('content')
    <h2>Edit form</h2>

    {!! Form::open(['route' => 'form.store']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update form', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop