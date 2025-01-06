@extends('layouts.app')

@section('title', 'Ajouter une Tâche')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Ajouter une Tâche</h1>

        <!-- Form to add a new task -->
        <form action="{{ route('taches.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-success">Ajouter la Tâche</button>
                <a href="{{ route('taches.index') }}" class="btn btn-secondary ms-2">Retour à la Liste</a>
            </div>
        </form>
    </div>
@endsection
