@php use App\Models\Torneo; @endphp

@extends('main')

@section('title', 'Editar Torneo')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12">
                <h1> Editar Torneo</h1>
            </div>
        </div>
    </div>

    <!-- Mostrar mensajes flash -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container-fluid">
        <form action="{{ route("torneos.update", $torneo -> id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="nombre">Nombre:</span>
                        </div>
                        <input class="form-control" id="nombre" name="nombre" type="text" value="{{ $torneo->nombre }}">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="ubicacion">Ubicación:</span>
                        </div>
                        <input class="form-control" id="ubicacion" name="ubicacion" type="text" value="{{ $torneo->ubicacion }}">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="modo">Modo:</span>
                        </div>
                        <select class="form-select" id="modo" name="modo" value="{{ $torneo->nombre }}">
                            <option value="" {{ $torneo->modo == '' ? 'selected' : '' }}> - </option>
                            <option value="INDIVIDUAL" {{ $torneo->modo == 'INDIVIDUAL' ? 'selected' : '' }}>Individual</option>
                            <option value="DOBLES" {{ $torneo->modo == 'DOBLES' ? 'selected' : '' }}>Dobles</option>
                            <option value="AMBOS" {{ $torneo->modo == 'AMBOS' ? 'selected' : '' }}>Ambos</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="categoria">Categoria:</span>
                        </div>
                        <select class="form-select" id="categoria" name="categoria">
                            <option value="" {{ $torneo->categoria == '' ? 'selected' : '' }}> - </option>
                            <option value="ATP_250" {{ $torneo->categoria == 'ATP_250' ? 'selected' : '' }}>ATP 250</option>
                            <option value="ATP_500" {{ $torneo->categoria == 'ATP_500' ? 'selected' : '' }}>ATP 500</option>
                            <option value="MASTERS_1000" {{ $torneo->categoria == 'MASTERS_1000' ? 'selected' : '' }}>MASTERS 1000</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="superficie">Superficie:</span>
                        </div>
                        <select class="form-select" id="superficie" name="superficie">
                            <option value="" {{ $torneo->superficie == '' ? 'selected' : '' }}> - </option>
                            <option value="DURA" {{ $torneo->superficie == 'DURA' ? 'selected' : '' }}>Dura</option>
                            <option value="HIERBA" {{ $torneo->superficie == 'HIERBA' ? 'selected' : '' }}>Hierba</option>
                            <option value="ARCILLA" {{ $torneo->superficie == 'ARCILLA' ? 'selected' : '' }}>Arcilla</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-50 bg-secondary bg-opacity-50 text-white" id="entradas_individual">Entradas individual:</span>
                        </div>
                        <input class="form-control" id="entradas_individual" name="entradas_individual" type="number" value="{{ $torneo->entradas_individual}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="entradas_dobles">Entradas dobles:</span>
                        </div>
                        <input class="form-control" id="entradas_dobles" name="entradas_dobles" type="number" value="{{ $torneo->entradas_dobles}}">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="premio">Premio:</span>
                        </div>
                        <input class="form-control" id="premio" name="premio" type="number" value="{{ $torneo->premio}}">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="puntos">Puntos:</span>
                        </div>
                        <input class="form-control" id="puntos" name="puntos" type="number" value="{{ $torneo->puntos}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="fecha_inicio">Fecha inicio:</span>
                        </div>
                        <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="date" value="{{ $torneo->fecha_inicio}}">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="fecha_fin">Fecha fin:</span>
                        </div>
                        <input class="form-control" id="fecha_fin" name="fecha_fin" type="date" value="{{ $torneo->fecha_fin}}">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="imagen">Imagen:</span>
                        </div>
                        <input class="form-control" id="imagen" name="imagen" type="file">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-1 mt-3"></div>
                    <div class="form-group col-md-1 mt-3">
                        <button type="submit" class="btn btn-outline-success text-white mt-4">Guardar</button>
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('torneos.index') }}">Volver</a>
                    </div>
                </div>
            </form>
    </div>

@endsection
