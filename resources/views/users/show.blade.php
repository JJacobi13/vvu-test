@extends('layouts.app')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Gebruiker  <li>{{$user->name}}</li>
        </div>
        <div class="card-body">
            Vervulde vacatures:
            <ul>
            @forelse($user->vacancies as $vacancy)
                <li>{{$vacancy->name}}: {{$vacancy->points}} punten</li>
            @empty
                <li>Deze persoon is niet zo actief binnen de vereniging</li>
            @endforelse
            </ul>
        </div>
    </div>
@endsection()