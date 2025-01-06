@extends('layouts.app')

@section('content')
    <h1>Modifier tache</h1>

    <form action="{{ route('taches.update', $tache) }}" method="POST">
        @csrf
        <label for="title">Title:</label> 
        <input type="text" name="title" id="title" value="{{ $tache->title }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $tache->description }}</textarea>

        <button type="submit">Modifier</button>
    </form>
@endsection
