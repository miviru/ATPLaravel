@php use App\Models\Tenista; @endphp

@extends('main')

@section('title', 'Crear Tenista')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary bg-opacity-50">
            <div class="col-md-12">
                <h1> Crear Tenistas</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="{{ route("tenistas.store") }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <label for="puntos" class="form-label">Puntos:</label>
                    <input class="form-control" id="puntos" name="puntos" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="pais" class="form-label">País:</label>
                    <input class="form-control" id="pais" name="pais" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento:</label>
                    <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="altura" class="form-label">Altura:</label>
                    <input class="form-control" id="altura" name="altura" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input class="form-control" id="peso" name="peso" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <label for="profesional_desde" class="form-label">Profesional desde:</label>
                    <input class="form-control" id="profesional_desde" name="profesional_desde" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="mano" class="form-label">Mano:</label>
                    <select class="form-select" id="mano" name="mano">
                        <option selected> - </option>
                        <option value="DIESTRO">Diestro</option>
                        <option value="ZURDO">Zurdo</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="reves" class="form-label">Revés:</label>
                    <select class="form-select" id="reves" name="reves">
                        <option selected> - </option>
                        <option value="UNA_MANO">Una mano</option>
                        <option value="DOS_MANOS">Dos manos</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <label for="modo" class="form-label">Modo:</label>
                    <select class="form-select" id="modo" name="modo">
                        <option selected> - </option>
                        <option value="INDIVIDUAL">Individual</option>
                        <option value="DOBLES">Dobles</option>
                        <option value="AMBOS">Ambos</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="entrenador" class="form-label">Entrenador:</label>
                    <input class="form-control" id="entrenador" name="entrenador" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="ganancias" class="form-label">Ganancias:</label>
                    <input class="form-control" id="ganancias" name="ganancias" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <label for="mejor_ranking" class="form-label">Mejor ranking:</label>
                    <input class="form-control" id="mejor_ranking" name="mejor_ranking" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="victorias" class="form-label">Victorias:</label>
                    <input class="form-control" id="victorias" name="victorias" type="text" required>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <label for="derrotas" class="form-label">Derrotas:</label>
                    <input class="form-control" id="derrotas" name="derrotas" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input class="form-control" id="imagen" name="imagen" type="file" required>
                </div>
                <div class="form-group col-md-1 mt-3"></div>
                <div class="form-group col-md-1 mt-3">
                    <button type="submit" class="btn btn-outline-success mt-4">Guardar</button>
                </div>
                <div class="form-group col-md-3 mt-3">
                    <a class="btn btn-outline-secondary mt-4" href="{{ route('tenistas.index') }}">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
