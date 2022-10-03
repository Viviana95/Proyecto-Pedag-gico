<nav class="navbar">

        <img class="logo_factoria" src="{{ asset('./assets/logo_factoria_white.png')}}">

        @if (Route::has('login'))
        <div class="px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/info_admin') }}" class="ml-6 text-sl
            text-white-900 font-bold text_login">Home</a>
            @else
            <a href="{{ route('login') }}" class="ml-6
                             font-bold text_login">INICIA SESIÓN</a>

            {{-- @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-6 text-sl font-bold text_login">REGÍSTRATE</a>
            @endif --}}
            @endauth

        </div>
        @endif
</nav>


