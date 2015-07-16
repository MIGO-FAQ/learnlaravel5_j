@extends('app')

@section('content')
    <table class="table">
        <thead>
        <th>Title</th>
        <th>Body</th>
        <th width="50px">Action</th>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{!! $page->title !!}</td>
                <td>{!! $page->body !!}</td>
                <td>
                    <a href="{!! route('mypages.edit', [$page->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    {{--<a href="{!! route('mypages.delete', [$page->id]) !!}" onclick="return confirm('Are you sure wants to delete this Article?')"><i class="glyphicon glyphicon-remove"></i></a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
