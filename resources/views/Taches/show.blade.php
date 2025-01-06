@extends('layouts.app')

@section('content')
    <h1>{{ $tache->title }}</h1>
    <p>{{ $tache->description }}</p>

    @if ($tache->completed)
        <p>Status: Completed</p>
    @else
        <p>Status: Not Completed</p>
        <form action="{{ route('taches.update', $tache) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="completed" value="1">
            <button type="submit">Mark as Completed</button>
        </form>
    @endif

    <a href="{{ route('taches.index') }}">Back to taches</a>
@endsection
