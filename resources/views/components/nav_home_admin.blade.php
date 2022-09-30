<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div>
    <nav class="navbar navbar-expand-lg nav_color">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('means.show')}}"><img class="logo_factoria" src="{{ asset('./assets/logo_factoria_white.png')}}"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto  mb-lg-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white mt-5 ms-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LENGUAJES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Java</a></li>
                  <li><a class="dropdown-item" href="#">JavaScript</a></li>
                  <li><a class="dropdown-item" href="#">Php</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 ms-5" href="{{route('format_view')}}">AÑADIR RECURSOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 ms-5" href="#">FORO</a>
              </li>
              @if(Auth::user()->id == 1)
              <li class="nav-item">
                <a class="nav-link text-white mt-5 ms-5" href="{{route('admin')}}">ADMIN</a>
              </li>
              @endif
            </ul>
            <div>
              <div class="d-flex ms-5 mb-2 ">
                <a class="mt-2" href="#"><input class="img-user"></a>
                <div class="hidden sm:flex sm:items-center sm:mr-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-white-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>


              </div>
              <form class="d-flex" role="search">
              {{--  <button class="btn" type="submit"></button>
                <input class="form-control me-2 rounded-3 mt-5" type="search"  aria-label="Search"> --}}
                <div class="input-group">
                  <button class="me-3" type="submit" id="button-addon1"><i class="bi bi-search lupa"></i></button>
                  <input type="search" class="form-control rounded-3  border-light" style="height: 5px;" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
              </form>
            </div>
          </div>
        </div>

      </nav>
</div>
