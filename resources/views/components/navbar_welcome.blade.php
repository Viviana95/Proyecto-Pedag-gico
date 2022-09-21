<div>

    <nav class="navbar">

        <img class="logo_factoria" src="{{ asset('./assets/logo_factoria_white.png')}}">


        @if (Route::has('login'))
        <div class="px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/info_admin') }}" class="text-m text-gray-700 dark:text-gray-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="ml-6 text-sl
                             text-white-900 font-bold text_login">LOGIN</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-6 text-sl font-bold text_login">REGISTER</a>
            @endif
            @endauth

        </div>
        @endif


    </nav>

</div>
