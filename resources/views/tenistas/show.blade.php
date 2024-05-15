@php use App\Models\Tenista; @endphp

@extends('main')

@section('title', 'Datos Tenista')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary bg-opacity-50">
            <div class="col-md-12">
                <h1> {{ $tenista -> nombre }}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-6 mt-5">
                <img src="https://www.mundodeportivo.com/files/content_image_mobile_filter/uploads/2020/10/11/60e7e6c377f87.jpeg">
            </div>
            <div class="col-md-6">
                <dl class="datos">
                    <dt class="col-sm-3">Puntos:</dt>
                    <dd class="col-sm-9">{{ $tenista->puntos }}</dd>
                    <dt class="col-sm-3">Nombre:</dt>
                    <dd class="col-sm-9">{{ $tenista->nombre }}</dd>
                    <dt class="col-sm-3">País:</dt>
                    <dd class="col-sm-9">{{ $tenista->pais }}</dd>
                    <dt class="col-sm-3">Fecha Nacimiento:</dt>
                    <dd class="col-sm-9">{{ $tenista->fecha_nacimiento }}</dd>
                    <dt class="col-sm-3">Edad:</dt>
                    <dd class="col-sm-9">{{ $tenista->getEdad() }}</dd>
                    <dt class="col-sm-3">Altura:</dt>
                    <dd class="col-sm-9">{{ $tenista->altura }} m</dd>
                    <dt class="col-sm-3">Peso:</dt>
                    <dd class="col-sm-9">{{ $tenista->peso }} kg</dd>
                    <dt class="col-sm-3">Profesional desde:</dt>
                    <dd class="col-sm-9">{{ $tenista->profesional_desde }}</dd>
                    <dt class="col-sm-3">Mano:</dt>
                    <dd class="col-sm-9">{{ $tenista->mano }}</dd>
                    <dt class="col-sm-3">Revés:</dt>
                    <dd class="col-sm-9">{{ $tenista->reves }}</dd>
                    <dt class="col-sm-3">Modo:</dt>
                    <dd class="col-sm-9">{{ $tenista->modo }}</dd>
                    <dt class="col-sm-3">Entrenador:</dt>
                    <dd class="col-sm-9">{{ $tenista->entrenador }}</dd>
                    <dt class="col-sm-3">Ganancias:</dt>
                    <dd class="col-sm-9">{{ $tenista->ganancias }} $</dd>
                    <dt class="col-sm-3">Mejor Ranking:</dt>
                    <dd class="col-sm-9">{{ $tenista->mejor_ranking }}</dd>
                    <dt class="col-sm-3">Victorias:</dt>
                    <dd class="col-sm-9">{{ $tenista->victorias }}</dd>
                    <dt class="col-sm-3">Derrotas:</dt>
                    <dd class="col-sm-9">{{ $tenista->derrotas }}</dd>
                    <dt class="col-sm-3">Win-rate:</dt>
                    <dd class="col-sm-9">{{ $tenista->getWinRate() }} %</dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
                    </svg>
                </a>
            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-secondary" href="{{ route('tenistas.index') }}">Volver</a>
            </div>
        </div>
    </div>

@endsection
