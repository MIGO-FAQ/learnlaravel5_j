@extends('app')

@section('content')
    <h1>Title : {{ $page->title }}</h1>
    <h2>Body : {{ $page->body }}</h2>
    <h3>User_id : {{ $page->user_id }}</h3>
    <h4>Tags:</h4>
    <ul>
        @foreach($page->tags as $tag )
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
@endsection