@extends('layouts.master')

@section('content')
    <h2>New form</h2>

    <form action="{{ route('form.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="well">
            <div class="container-fluid">
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                @if ($errors->has('title'))
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->get('title') as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea rows="10" class="form-control" name="description" id="description"></textarea>
                </div>

                @if ($errors->has('description'))
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->get('description') as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="form-group {{ $errors->has('max-responses') ? 'has-error' : '' }}">
                    <label for="max-responses">Maximum number of responses</label>
                    <input type="number" class="form-control" name="max-responses" id="max-responses" data-hint="Leave blank for no limit">
                </div>

                @if ($errors->has('max-responses'))
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->get('max-responses') as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
        <div class="form-element-area"></div>
        <button class="btn btn-fab btn-raised btn-success pull-right btn-add-form-element"><i class="fa fa-plus"></i></button>
        <button class="btn btn-primary">Create form</button>
    </form>
@stop