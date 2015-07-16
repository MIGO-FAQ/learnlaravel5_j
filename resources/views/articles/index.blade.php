@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Articles</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('articles.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($articles->isEmpty())
                <div class="well text-center">No Articles found.</div>
            @else
                @include('articles.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $articles])


    </div>
@endsection