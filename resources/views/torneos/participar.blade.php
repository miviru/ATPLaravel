@php use App\Models\Inscripcion; @endphp

@extends('main')

@section('title', 'Inscribir tenistas')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12 text-white">
                <h1>Inscribir en {{ $torneo->nombre }}</h1>
            </div>
        </div>
    </div>
    {{--    Scope--}}
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="{{ route('tenistas.index') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control bg-black text-white" id="search" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2 class="text-white">Tenistas No Inscritos</h2>
                @if($tenistasNoInscritos->isNotEmpty())
                    @foreach($tenistasNoInscritos as $tenista)
                        <div class="card mb-3 bg-secondary" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $tenista->imagen }}" class="img-fluid rounded-start" alt="tenista">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title text-white">{{ $tenista->nombre }}</h3>
                                        <form action="{{ route('torneos.inscribirTenista', ['torneo_id' => $torneo->id, 'tenista_id' => $tenista->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-primary text-white btn-lg mb-2">Inscribir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="bg-primary text-center text-white">
                        <h1>No hay tenistas disponibles</h1>
                    </div>
                @endif
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('torneos.index') }}">Volver</a>
            </div>
        </div>
    </div>
@endsection
