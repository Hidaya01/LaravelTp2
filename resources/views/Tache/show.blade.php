@extends('layouts.app')

@section('title', 'Détails de la Tâche')

@section('content')
    <h1>{{ $tache->titre }}</h1>

    <p>{{ $tache->description }}</p>
    <p>{{ $tache->completed ? 'Terminée' : 'Non terminée' }}</p>

    <a href="{{ route('taches.edit', $tache) }}" class="btn btn-primary">Modifier</a>
@endsection
