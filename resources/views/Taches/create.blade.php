@extends('layouts.app')

@section('content')
    <h1>Ajouter tache</h1>

    <form action="{{ route('taches.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Ajouter</button>
    </form>
@endsection
