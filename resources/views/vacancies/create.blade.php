@extends('layouts.modal')

@section('title')
    Nieuwe vacature
@endsection()

@section('body')
    <div class="form-group">
        <label class="col-3 col-form-label">Naam</label>
        <div class="col-9">
            <input class="form-control" name="name" placeholder="Naam">
        </div>
    </div>
    <div class="form-group">
        <label class="col-3 col-form-label">Beschrijving</label>
        <div class="col-9">
            <textarea class="form-control" name="description" placeholder="Beschrijving"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-3 col-form-label">Aantal</label>
        <div class="col-9">
            <input class="form-control" name="quantity" placeholder="Aantal" type="number">
        </div>
    </div>
    <div class="form-group">
        <label class="col-3 col-form-label">Punten</label>
        <div class="col-9">
            <input class="form-control" name="points" placeholder="Punten" type="number">
        </div>
    </div>

@endsection()

@section('footer')
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
    <button type="submit" class="btn btn-primary">Opslaan</button>
@endsection()