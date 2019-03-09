@extends('layout', [
    'siteTitle' => 'Főoldal'
])

@section('content')
    <h1>Hello Blog</h1>

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="/posztok/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
