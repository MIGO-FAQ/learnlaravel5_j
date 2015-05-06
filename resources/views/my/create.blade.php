@extends('app')

@section('content')

    <h1>Create Page</h1>
    <hr/>

    {!! Form::open(['url' => 'mypages']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Name:') !!}
        {!! Form::text('title', null, ['class' => 'form-control', ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control', ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('userid', 'Userid:') !!}
        {!! Form::text('userid', null, ['class' => 'form-control', ]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

@stop