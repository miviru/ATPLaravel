@php use App\Models\Tenista; @endphp

@extends('main')

@section('title', 'Crear Tenista')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12">
                <h1> Crear Tenistas</h1>
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

    <div class="container-fluid text-white">
        <form action="{{ route("tenistas.store") }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="puntos">Puntos:</span>
                    </div>
                    <input class="form-control" id="puntos" name="puntos" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="nombre">Nombre:</span>
                    </div>
                    <input class="form-control" id="nombre" name="nombre" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="pais">País:</span>
                    </div>
                    <input class="form-control" id="pais" name="pais" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-50 bg-secondary bg-opacity-50 text-white" id="fecha_nacimiento">Fecha de nacimiento:</span>
                    </div>
                    <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="altura">Altura:</span>
                    </div>
                    <input class="form-control" id="altura" name="altura" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="peso">Peso:</span>
                    </div>
                    <input class="form-control" id="peso" name="peso" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-50 bg-secondary bg-opacity-50 text-white" id="profesional_desde">Profesional desde:</span>
                    </div>
                    <input class="form-control" id="profesional_desde" name="profesional_desde" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="mano">Mano:</span>
                    </div>
                    <select class="form-select" id="mano" name="mano">
                        <option selected> - </option>
                        <option value="DIESTRO">Diestro</option>
                        <option value="ZURDO">Zurdo</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="reves">Revés:</span>
                    </div>
                    <select class="form-select" id="reves" name="reves">
                        <option selected> - </option>
                        <option value="UNA_MANO">Una mano</option>
                        <option value="DOS_MANOS">Dos manos</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="modo">Modo:</span>
                    </div>
                    <select class="form-select" id="modo" name="modo">
                        <option selected> - </option>
                        <option value="INDIVIDUAL">Individual</option>
                        <option value="DOBLES">Dobles</option>
                        <option value="AMBOS">Ambos</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="entrenador">Entrenador:</span>
                    </div>
                    <input class="form-control" id="entrenador" name="entrenador" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="ganancias">Ganancias:</span>
                    </div>
                    <input class="form-control" id="ganancias" name="ganancias" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="mejor_ranking">Mejor ranking:</span>
                    </div>
                    <input class="form-control" id="mejor_ranking" name="mejor_ranking" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="victorias">Victorias:</span>
                    </div>
                    <input class="form-control" id="victorias" name="victorias" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="derrotas">Derrotas:</span>
                    </div>
                    <input class="form-control" id="derrotas" name="derrotas" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text w-25 bg-secondary bg-opacity-50 text-white" id="imagen">Imagen:</span>
                    </div>
                    <input class="form-control" id="imagen" name="imagen" type="file" required>
                </div>
                <div class="form-group col-md-1 mt-3"></div>
                <div class="form-group col-md-1 mt-3">
                    <button type="submit" class="btn btn-outline-success text-white mt-4">Guardar</button>
                </div>
                <div class="form-group col-md-3 mt-3">
                    <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('tenistas.index') }}">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
