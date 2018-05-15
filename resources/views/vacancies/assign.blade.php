@extends('layouts.modal')

@section('title')
    Vacature toewijzen
@endsection()

@section('body')
    <div class="form-group">
        <label class="col-3 col-form-label">Gebruiker</label>
        <div class="col-9">
            <select class="form-control select2" name="user" placeholder="Selecteer gebruiker">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection()

@section('footer')
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
    <button type="submit" class="btn btn-primary">Opslaan</button>
@endsection()