@extends('layouts.app')

@section('title', 'Modifier la Tâche')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Modifier la Tâche</h1>

        <form action="{{ route('taches.update', $tache) }}" method="POST" class="form">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ $tache->titre }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ $tache->description }}</textarea>
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="completed" id="completed" {{ $tache->completed ? 'checked' : ''}}>
                <label class="form-check-label" for="completed">
                    Terminée
                </label>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Modifier la Tâche</button>
                <a href="{{ route('taches.index') }}" class="btn btn-secondary ms-2">Retour à la Liste</a>
            </div>
        </form>
    </div>
@endsection
