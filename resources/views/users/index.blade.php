@extends('layouts.app')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Gebruikers
        </div>
        <div class="card-body">
            <ul>
                @foreach($users as $user)
                    <li>
                        <a href="{{route('users.show', $user)}}">
                            {{$user->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection()