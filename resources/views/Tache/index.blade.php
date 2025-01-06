@extends('layouts.app')

@section('title', 'Liste des Tâches')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Liste des Tâches</h1>

        <!-- Rechercher -->
        <form method="GET" action="{{ route('taches.index') }}" class="d-flex justify-content-center mb-4">
            <input type="text" name="search" placeholder="Rechercher une tâche" class="form-control me-2" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>

            <!-- Ajouter -->
        <div class="mb-3 text-center">
            <a href="{{ route('taches.create') }}" class="btn btn-success">Ajouter une tâche</a>
        </div>

        <ul class="list-group">
            @forelse ($taches as $tache)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('taches.show', $tache) }}" class="fw-bold">{{ $tache->titre }}</a>
                    <span class="badge bg-{{ $tache->completed ? 'success' : 'warning' }} text-dark">
                        {{ $tache->completed ? 'Terminée' : 'Non Terminée' }}
                    </span>
                    <div>
                        <a href="{{ route('taches.edit', $tache) }}" class="btn btn-sm btn-outline-primary me-2">Modifier</a>
                        
                        <form action="{{ route('taches.destroy', $tache) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="list-group-item">Aucune tâche trouvée.</li>
            @endforelse
        </ul>
    </div>
@endsection
