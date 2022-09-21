<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div>
    <nav class="navbar navbar-expand-lg nav_color">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo_factoria" src="{{ asset('./assets/logo_factoria_white.png')}}"></a>
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
                  <li><a class="dropdown-item mt-5" href="#">Java</a></li>
                  <li><a class="dropdown-item mt-5" href="#">JavaScript</a></li>
                  <li><a class="dropdown-item mt-5" href="#">Php</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 ms-5" href="#">AÑADIR RECURSOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 ms-5" href="#">FORO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 ms-5" href="#">ADMIN</a>
              </li>
            </ul>
            <div>
              <div class="d-flex ms-3 mb-2">
                <a class="mt-2" href="#"><img class="rounded-circle ms-5" src="{{ asset('./assets/perfil.png')}}"></a>
                <a class="nav-link text-white mt-3 ms-3" href="#">Admin</a><i class="bi bi-caret-down-fill mt-3 ms-2"></i>
                
              </div>
              <form class="d-flex" role="search">
              {{--  <button class="btn" type="submit"></button>
                <input class="form-control me-2 rounded-3 mt-5" type="search"  aria-label="Search"> --}}
                <div class="input-group">
                  <button class="me-3" type="submit" id="button-addon1"><i class="bi bi-search"></i></button>
                  <input type="search" class="form-control rounded-3  border-light" style="height: 5px;" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
              </form>
            </div>
          </div>
        </div>
      </nav>
</div>