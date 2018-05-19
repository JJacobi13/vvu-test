@extends('layouts.app')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Teams
        </div>
        <div class="card-body">
            <ul>
                @foreach($teams as $team)
                    <li>
                        {{$team->name}}: {{$team->getPoints()}} punten
                        <ul>
                            @foreach($team->users as $user)
                                <li>{{$user->name}}
                                    <ul>
                                        @forelse($user->vacancies as $vacancy)
                                            <li>{{$vacancy->name}}: {{$vacancy->points}} punten</li>
                                        @empty
                                            <li>Deze persoon is niet zo actief binnen de vereniging</li>
                                        @endforelse
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <div id="chart-div"></div>
            {!! Lava::render('BarChart', 'points', 'chart-div') !!}
        </div>
    </div>
@endsection()