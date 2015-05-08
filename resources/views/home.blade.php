@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div id="title" style="text-align: center;">
                <h1>My Page</h1>

                <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
            </div>
            <hr>
            <div id="content">
                <ul>
                    @foreach ($pages as $page)
                        <li style="margin: 50px 0;">
                            <div class="title">
                                <a href="{{ URL('pages/'.$page->id) }}">
                                    <h4>{{ $page->title }}</h4>
                                </a>
                            </div>
                            <div class="body">
                                <p>{{ $page->body }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection