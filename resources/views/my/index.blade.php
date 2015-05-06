@extends('app')

@section('content')
    <div id="title" style="text-align: center;">
        <h1>Page</h1>
    </div>
    @foreach($pages as $page)
        <div id="title" style="text-align: center;">
            <h2><a href="{{ url('/mypages', $page->id ) }}">{{ $page->title }}</a></h2>
        </div>
        <div class="body" style="text-align: center;">{{ $page->body }}</div>

    @endforeach
@stop
