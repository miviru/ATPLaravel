@php use App\Models\Tenista; @endphp

@extends('main')

@section('title', 'Editar Tenista')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12">
                <h1> Editar Tenistas</h1>
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
        <form action="{{ route("tenistas.update", $tenista -> id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="puntos">Puntos:</span>
                    </div>
                    <input class="form-control" id="puntos" name="puntos" type="text" value="{{ $tenista->puntos }}">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="altura">Altura:</span>
                    </div>
                    <input class="form-control" id="altura" name="altura" type="text" value="{{ $tenista->altura }}">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="peso">Peso:</span>
                    </div>
                    <input class="form-control" id="peso" name="peso" type="text" value="{{ $tenista->peso }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="mano">Mano:</span>
                    </div>
                    <select class="form-select" id="mano" name="mano">
                        <option value="" {{ $tenista->mano == '' ? 'selected' : '' }}> - </option>
                        <option value="DIESTRO" {{ $tenista->mano == 'DIESTRO' ? 'selected' : '' }}>Diestro</option>
                        <option value="ZURDO" {{ $tenista->mano == 'ZURDO' ? 'selected' : '' }}>Zurdo</option>
                    </select>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="reves">Revés:</span>
                    </div>
                    <select class="form-select" id="reves" name="reves">
                        <option value="" {{ $tenista->reves == '' ? 'selected' : '' }}> - </option>
                        <option value="UNA_MANO" {{ $tenista->reves == 'UNA_MANO' ? 'selected' : '' }}>Una mano</option>
                        <option value="DOS_MANOS" {{ $tenista->reves == 'DOS_MANOS' ? 'selected' : '' }}>Dos manos</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="modo">Modo:</span>
                    </div>
                    <select class="form-select" id="modo" name="modo">
                        <option value="" {{ $tenista->modo == '' ? 'selected' : '' }}> - </option>
                        <option value="INDIVIDUAL" {{ $tenista->modo == 'INDIVIDUAL' ? 'selected' : '' }}>Individual</option>
                        <option value="DOBLES" {{ $tenista->modo == 'DOBLES' ? 'selected' : '' }}>Dobles</option>
                        <option value="AMBOS" {{ $tenista->modo == 'AMBOS' ? 'selected' : '' }}>Zurdo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="entrenador">Entrenador:</span>
                    </div>
                    <input class="form-control" id="entrenador" name="entrenador" type="text" value="{{ $tenista->entrenador }}">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="ganancias">Ganancias:</span>
                    </div>
                    <input class="form-control" id="ganancias" name="ganancias" type="text" value="{{ $tenista->ganancias }}">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="mejor_ranking">Mejor ranking:</span>
                    </div>
                    <input class="form-control" id="mejor_ranking" name="mejor_ranking" type="text" value="{{ $tenista->mejor_ranking }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="victorias">Victorias:</span>
                    </div>
                    <input class="form-control" id="victorias" name="victorias" type="text" value="{{ $tenista->victorias }}">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="derrotas">Derrotas:</span>
                    </div>
                    <input class="form-control" id="derrotas" name="derrotas" type="text" value="{{ $tenista->derrotas }}">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="imagen">Imagen:</span>
                    </div>
                    <input class="form-control" id="imagen" name="imagen" type="file">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2 mt-3">
                    <button type="submit" class="btn btn-outline-success text-white mt-4">Guardar</button>
                </div>
                <div class="form-group col-md-2 mt-3">
                    <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('tenistas.index') }}">Volver</a>
                </div>
            </div>
        </form>
    </div>

    @endsection
