@extends('layouts.app')

@section('main-content')
<div class="container py-5">
    <div class="row">
        @foreach ($trains as $train)
        <div class="col-4 mb-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Azienda: <small class="text-muted">{{ $train->company}}</small></p>
                    <p class="card-text">Stazione di partenza: <small class="text-muted">{{ $train->departure_station}}</small></p>
                    <p class="card-text">Stazione di arrivo: <small class="text-muted">{{ $train->arrival_station}}</small></p>
                    <p class="card-text">Orario di partenza: <small class="text-muted">{{ $train->departure_time }}</small></p>
                    <p class="card-text">Orario di arrivo: <small class="text-muted">{{ $train->arrival_time }}</small></p>
                    <p class="card-text">Codice Treno: <small class="text-muted">{{ $train->train_code }}</small></p>
                    <p class="card-text">Numero Carrozze: <small class="text-muted">{{ $train->number_carriages }}</small></p>
                    <p class="card-text">In orario: <small class="text-muted">{{ $train->in_time }}</small></p>
                    <p class="card-text">Cancellato: <small class="text-muted">{{ $train->deleted }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection