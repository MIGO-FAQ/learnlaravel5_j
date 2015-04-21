@extends('app')

@section('content')
    <h1>Page</h1>
    @foreach($pages as $page)
        <page>
            <h2>
                <a href="{{ url('/api', $page->id ) }}">{{ $page->title }}</a></h2>

            <div class="body">{{ $page->body }}</div>
        </page>
    @endforeach
@stop
