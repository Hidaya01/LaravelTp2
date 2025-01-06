@extends('layouts.app')

@section('content')
    <h1>taches</h1>
    <a href="{{ route('taches.create') }}">Add tache</a>

    <ul>
        @foreach ($taches as $tache)
            <li>
                <a href="{{ route('taches.show', $tache) }}">{{ $tache->title }}</a>
                @if ($tache->completed)
                    <span>(Completed)</span>
                @endif
                <a href="{{ route('taches.edit', $tache) }}">Edit</a>
                <form action="{{ route('taches.destroy', $tache) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
