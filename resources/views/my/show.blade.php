@extends('app')

@section('content')
    <h1>{{ $page->title }}</h1>
    <page>
        {{ $page->body }}
    </page>
@endsection