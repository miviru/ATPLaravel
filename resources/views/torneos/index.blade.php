@php use App\Models\Torneo; @endphp

@extends ('main')

@section ('title', 'Torneos')

@section ('content')
{{--    Titulo--}}
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12">
                <h1>Torneos</h1>
            </div>
        </div>
    </div>
{{--Scope--}}
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="{{ route('torneos.index') }}" method="GET">
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
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card bg-black text-light border-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nuevo Torneo</h5>
                        <a href="{{ route('torneos.create') }}" class="btn btn-outline-success text-white btn-lg">Crear Nuevo</a>
                    </div>
                </div>
            </div>

            @foreach($torneos as $torneo)
                <div class="col-md-4 mt-3">
                    <div class="card bg-black border-primary text-light" style="width: 18rem;">
                        @if (filter_var($torneo->imagen, FILTER_VALIDATE_URL))
                            <img class="card-img" src="{{ $torneo->imagen }}" alt="Card_img">
                        @else
                            <img class="card-img" src="{{ asset('storage/' . $torneo->imagen) }}" alt="Card_img">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $torneo->nombre }}</h5>
                            <a href="{{ route('torneos.show', $torneo->id) }}" class="btn btn-outline-primary text-white btn-lg">Ver más</a>
                            <a href="{{ route('torneos.edit', $torneo->id) }}" class="btn btn-outline-warning text-white btn-lg">Editar</a>
                            <form action="{{ route('torneos.destroy', $torneo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger text-white btn-lg">Eliminar</button>
                            </form>
                            <a href="" class="btn btn-outline-info text-white btn-lg">Participantes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if(count($torneos) == 0)
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>No hay torneos registrados</h2>
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="form-group col-md-2 mt-3">
                <a class="btn btn-outline-secondary text-white mt-4" href="{{ route('indexPrincipal') }}">Volver</a>
            </div>
        </div>
    </div>
@endsection
