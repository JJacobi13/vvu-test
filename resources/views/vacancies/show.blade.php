@extends('layouts.app')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Vacature "{{$vacancy->name}}"
            <button class="btn btn-sm btn-primary float-right" type="button" data-toggle="modal" data-target="#assign-vacancy">
                Wijs toe
            </button>
        </div>
        <div class="card-body">
            <strong>Beschrijving:</strong><br />
            <p>{{$vacancy->description}}</p>
            <strong>Toegewezen aan:</strong>
            <ul>
                @foreach($vacancy->users as $user)
                    <li>{{$user->name}} <a href="{{route('vacancies.detach', [$vacancy->id, $user->id])}}"><i class="fa fa-close" style="color: red"></i></a> </li>
                @endforeach()
            </ul>

            <div class="modal fade" id="assign-vacancy">
                <form action="{{route('vacancies.assign', $vacancy->id)}}" method="post">
                    @include('vacancies.assign')
                </form>
            </div>
        </div>
    </div>
@endsection()

