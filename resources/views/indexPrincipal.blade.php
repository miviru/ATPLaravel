
@extends ('main')

@section ('title', 'index')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @include('opciones')
@endsection
