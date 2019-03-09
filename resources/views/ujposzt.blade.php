@extends('layout')

@section('content')
    <h1>Új poszt</h1>

    @if ($errors->count() > 0)
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST">
        {{ csrf_field() }}
        <div>
            <label for="title">Poszt címe</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="content">Poszt tartalma</label>
            <textarea name="content">{{ old('content') }}</textarea>
        </div>
        <div>
            <button type="submit">Mentés</button>
        </div>
    </form>
@endsection
