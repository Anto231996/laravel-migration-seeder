@extends('layouts.app')

@section('main-content')
<div class="container py-5">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text">Azienda: <small class="text-muted">{{ $singleTrain->company}}</small></p>
                    <p class="card-text">Stazione di partenza: <small class="text-muted">{{ $singleTrain->departure_station}}</small></p>
                    <p class="card-text">Stazione di arrivo: <small class="text-muted">{{ $singleTrain->arrival_station}}</small></p>
                    <p class="card-text">Orario di partenza: <small class="text-muted">{{ $singleTrain->departure_time }}</small></p>
                    <p class="card-text">Orario di arrivo: <small class="text-muted">{{ $singleTrain->arrival_time }}</small></p>
                    <p class="card-text">Codice Treno: <small class="text-muted">{{ $singleTrain->train_code }}</small></p>
                    <p class="card-text">Numero Carrozze: <small class="text-muted">{{ $singleTrain->number_carriages }}</small></p>
                    <p class="card-text">In orario: <small class="text-muted">{{ $singleTrain->in_time }}</small></p>
                    <p class="card-text">Cancellato: <small class="text-muted">{{ $singleTrain->deleted }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection