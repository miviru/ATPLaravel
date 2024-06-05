@php use App\Models\Torneo; @endphp

@extends ('main')

@section ('title', 'Participar en torneos')

@section ('content')
{{--    Titulo--}}
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-12">
                <h1>Participar en torneos</h1>
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
        </div>
    </div>
@endsection
