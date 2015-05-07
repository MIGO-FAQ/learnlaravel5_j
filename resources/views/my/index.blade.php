@extends('app')

@section('content')
    <h1>Page</h1>
    @foreach($pages as $page)

        <h2><a href="{{ url('/mypages', $page->id ) }}">{{ $page->title }}</a></h2>

        {{ $page->body }}

    @endforeach
@stop
