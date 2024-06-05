<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos tenista</title>
    {{--Links Bootstrap 5--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('{{ $tenista->imagen }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: rgb(24, 91, 225);
            color: white;
            font-family: 'Tahoma', sans-serif;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 text-center">
            <h1> {{ $tenista->nombre }}</h1>
        </div>
    </div>
    <div class="row" style="margin-top: 50px">
        <div>
            <dl>
                <dt>Ranking:</dt>
                <dd>{{ $tenista->getRanking() }}</dd>
                <dt>Puntos:</dt>
                <dd>{{ $tenista->puntos }}</dd>
                <dt>Nombre:</dt>
                <dd>{{ $tenista->nombre }}</dd>
                <dt>País:</dt>
                <dd>{{ $tenista->pais }}</dd>
                <dt>Fecha Nacimiento:</dt>
                <dd>{{ $tenista->fecha_nacimiento }}</dd>
                <dt>Edad:</dt>
                <dd>{{ $tenista->getEdad() }}</dd>
                <dt>Altura:</dt>
                <dd>{{ $tenista->altura }} m</dd>
                <dt>Peso:</dt>
                <dd>{{ $tenista->peso }} kg</dd>
                <dt>Profesional desde:</dt>
                <dd>{{ $tenista->profesional_desde }}</dd>
                <dt>Mano:</dt>
                <dd>{{ $tenista->mano }}</dd>
                <dt>Revés:</dt>
                <dd>{{ $tenista->reves }}</dd>
                <dt>Modo:</dt>
                <dd>{{ $tenista->modo }}</dd>
                <dt>Entrenador:</dt>
                <dd>{{ $tenista->entrenador }}</dd>
                <dt>Ganancias:</dt>
                <dd>{{ $tenista->ganancias }} $</dd>
                <dt>Mejor Ranking:</dt>
                <dd>{{ $tenista->mejor_ranking }}</dd>
                <dt>Victorias:</dt>
                <dd>{{ $tenista->victorias }}</dd>
                <dt>Derrotas:</dt>
                <dd>{{ $tenista->derrotas }}</dd>
                <dt>Win-rate:</dt>
                <dd>{{ $tenista->getWinRate() }} %</dd>
            </dl>
        </div>
    </div>
</div>
</body>
</html>
