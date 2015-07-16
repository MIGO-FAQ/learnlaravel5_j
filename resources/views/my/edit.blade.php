@extends('app')

@section('content')
    <div class="container">
        <h1>Edit Page</h1>
        <hr/>

        {!! Form::model($page, ['route' => ['mypages.update', $page->id], 'method' => 'patch']) !!}

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