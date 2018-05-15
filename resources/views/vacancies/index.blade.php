@extends('layouts.app')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Vacatures
            <button class="btn btn-sm btn-primary float-right" type="button" data-toggle="modal" data-target="#create-vacancy">
                Nieuwe vacature
            </button>
        </div>

        <ul class="list-group">
            @foreach($vacancies as $vacancy)
                <li class="list-group-item">
                    <a href="{{route('vacancies.show', $vacancy->id)}}">
                        {{$vacancy->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="modal fade" id="create-vacancy">
        <form action="{{route('vacancies.store')}}" method="post">
            @include('vacancies.create')
        </form>
    </div>
@endsection()

