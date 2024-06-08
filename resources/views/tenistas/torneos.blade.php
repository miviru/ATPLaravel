@php use App\Models\Inscripcion @endphp

@extends('main')

@section('title', 'Torneos inscritos')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12 text-white">
                <h1>Torneos Jugados</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @if($inscripciones !== null && !$inscripciones->isEmpty())
                    @foreach($inscripciones as $inscripcion)
                        <div class="card mb-3 bg-secondary" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $inscripcion->torneo->logo }}" class="img-fluid rounded-start" alt="torneo">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title text-white">{{ $inscripcion->torneo->nombre }}</h3>
                                        <a href="{{ route('torneos.show', $inscripcion->torneo_id) }}" class="btn btn-outline-primary text-white btn-lg">Ver datos torneo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="bg-primary text-center text-white">
                        <h1>No hay torneos jugados</h1>
                    </div>
                @endif
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('tenistas.index') }}">Volver</a>
            </div>
        </div>
    </div>
@endsection
