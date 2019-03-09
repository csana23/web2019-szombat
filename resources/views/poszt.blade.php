@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->created_at }}</p>

    <div>
        {{ $post->content }}
    </div>

    <hr>

    <form action="/komment/{{ $post->id }}" method="POST">
        {{ csrf_field() }}

        <label for="comment">Megjegyzés</label>
        <textarea name="comment"></textarea>

        <button type="submit">Megjegyzés mentése</button>
    </form>

    <hr>

    <div>
        @foreach($post->comments as $comment)
            <p>{{ $comment->comment }}</p>
        @endforeach
    </div>
@endsection
