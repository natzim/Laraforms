<div class="panel panel-default">
    <div class="panel-heading">
        {!! Form::label('heading', 'Heading') !!}
        {!! Form::text('heading', null, ['class' => 'form-control']) !!}
    </div>
    <div class="panel-body">
        {!! Form::select('type', [
            'text'     => 'Text',
            'dropdown' => 'Dropdown',
            'number'   => 'Number',
            'slider'   => 'Slider'
        ], null, ['class' => 'form-control']) !!}

        <button class="btn btn-danger btn-remove-form-element"><i class="fa fa-trash"></i> Remove</button>
    </div>
</div>