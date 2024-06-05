<header>
    <div class="container-fluid bg-black text-white text-center">
        <div class="row">
            <div class="col-md-3">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/aa/Association_of_Tennis_Professionals_logo.svg/500px-Association_of_Tennis_Professionals_logo.svg.png" class="w-50">
            </div>
            <div class="col-md-5 mt-1">
                <h1>ATP Laravel</h1>
            </div>

            @guest
                <div class="col-md-2 mt-2">
                    <a href="{{ route('register') }}" type="button" class="btn btn-outline-dark text-white">Registrarse</a>
                </div>
                <div class="col-md-1 mt-2">
                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-dark text-white">Iniciar sesión</a>
                </div>
            @endguest

            @auth
                <div class="col-md-2 mt-2">
                    <a href="{{ route('logout') }}" type="button" class="btn btn-outline-dark text-white"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <div class="col-md-1 mt-2">
                    <a type="button" class="btn btn-outline-dark text-white">{{ auth()->user()->name }}</a>
                </div>
            @endauth
        </div>
    </div>
</header>
