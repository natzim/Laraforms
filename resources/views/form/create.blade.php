@extends('layouts.master')

@section('content')
    <h2>Create form</h2>

    {!! Form::open(['route' => 'form.store']) !!}

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        @if ($errors->has('title'))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->get('title') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        @if ($errors->has('description'))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->get('description') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="form-element-area sortable"></div>

        <button class="btn btn-success btn-add-form-element"><i class="fa fa-plus"></i> Add form element</button>

        {!! Form::submit('Create form', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@stop