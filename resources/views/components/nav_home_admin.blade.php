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
                <a class="nav-link dropdown-toggle text-white mt-5 ms-5 me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LENGUAJES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item mt-5" href="#">Java</a></li>
                  <li><a class="dropdown-item mt-5" href="#">JavaScript</a></li>
                  <li><a class="dropdown-item mt-5" href="#">Php</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 me-5" href="#">AÑADIR RECURSOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5 me-5" href="#">FORO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mt-5" href="#">ADMIN</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
      </nav>
</div>