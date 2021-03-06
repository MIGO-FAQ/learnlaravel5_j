@extends('app')

@section('content')
    <div class="container">
        <h1>Create Page</h1>
        <hr/>

        {!! Form::open(['url' => 'mypages']) !!}

        @include ('my.form')

        {!! Form::close() !!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection