@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url("https://e00-marca.uecdn.es/assets/multimedia/imagenes/2018/06/10/15286497017806.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Logeado!') }}

{{-- Redirigir al indexPrincipal despues de 2 segundos--}}
                    <script>
                        setTimeout(function(){
                            window.location.href = "{{ route('indexPrincipal') }}";
                        }, 2000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
