@php use App\Models\Inscripcion @endphp

@extends('main')

@section('title', 'Tenistas inscritos')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12 text-white">
                <h1>Participantes {{ $torneo->nombre }}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                @if($inscripciones !== null && !$inscripciones->isEmpty())
                    @foreach($torneo->inscripciones as $inscripcion)
                        <div class="card mb-3 bg-secondary" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $inscripcion->tenista->imagen }}" class="img-fluid rounded-start" alt="tenista">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title text-white">{{ $inscripcion->tenista->nombre }}</h3>
                                        <form action="{{ route('torneos.eliminarParticipante', ['torneo_id' => $torneo->id, 'tenista_id' => $inscripcion->tenista_id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger text-white btn-lg">Eliminar</button>
                                        </form>
                                        <a href="{{ route('tenistas.show', $inscripcion->tenista_id) }}" class="btn btn-outline-primary text-white btn-lg">Ver datos tenista</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class=" bg-primary text-center text-white">
                        <h1>No hay tenistas inscritos</h1>
                    </div>
                @endif

            </div>
            <div class="col-md-4"></div>

        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('torneos.index') }}">Volver</a>
            </div>
    </div>

@endsection
