@extends('layout')

@section('content')
    <h1>Poszt szerkesztése</h1>

    <form method="POST">
        {{ csrf_field() }}
        <div>
            <label for="title">Poszt címe</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Poszt tartalma</label>
            <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <button type="submit">Mentés</button>
        </div>
    </form>
@endsection
