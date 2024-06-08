@php use App\Models\Torneo; @endphp

@extends('main')

@section('title', 'Datos Torneo')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12 text-white">
                <h1> {{ $torneo -> nombre }}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-image: url('{{ filter_var($torneo->imagen, FILTER_VALIDATE_URL) ? $torneo->imagen : asset('storage/' . $torneo->imagen) }}'); background-size: cover; background-position: center;">
        <div class="row mt-4">
            <div class="col-md-6">
                <dl class="datos bg-secondary bg-opacity-75 text-white">
                    <dt class="col-sm-3">Nombre:</dt>
                    <dd class="col-sm-9">{{ $torneo->nombre }}</dd>
                    <dt class="col-sm-3">Ubicación:</dt>
                    <dd class="col-sm-9">{{ $torneo->ubicacion }}</dd>
                    <dt class="col-sm-3">Modo:</dt>
                    <dd class="col-sm-9">{{ $torneo->modo }}</dd>
                    <dt class="col-sm-3">Categoría:</dt>
                    <dd class="col-sm-9">{{ $torneo->categoria }}</dd>
                    <dt class="col-sm-3">Superficie:</dt>
                    <dd class="col-sm-9">{{ $torneo->superficie }}</dd>
                    <dt class="col-sm-3">Entradas individual:</dt>
                    <dd class="col-sm-9">{{ $torneo->entradas_individual }}</dd>
                    <dt class="col-sm-3">Entradas dobles:</dt>
                    <dd class="col-sm-9">{{ $torneo->entradas_dobles }}</dd>
                    <dt class="col-sm-3">Premio:</dt>
                    <dd class="col-sm-9">{{ $torneo->premio }} $</dd>
                    <dt class="col-sm-3">Puntos:</dt>
                    <dd class="col-sm-9">{{ $torneo->puntos }}</dd>
                    <dt class="col-sm-3">Fecha inicio:</dt>
                    <dd class="col-sm-9">{{ $torneo->fecha_inicio }}</dd>
                    <dt class="col-sm-3">Fecha fin:</dt>
                    <dd class="col-sm-9">{{ $torneo->fecha_fin }}</dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10"></div>

            <div class="col-md-1">
                <a class="btn btn-outline-secondary text-white" href="{{ route('torneos.index') }}">Volver</a>
            </div>
        </div>
    </div>

@endsection
