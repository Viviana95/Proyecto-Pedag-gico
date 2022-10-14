<link rel="stylesheet" href="{{ asset('css/panel_admin.css') }}">
<div class="container_panel_admin">
    <h1 class="title">Panel Administrador</h1>

{{--     <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
             <h3 class="subtitle" >Recursos subidos</h3>
             <a href="{{ route('means.index') }}"><img class="imagen_panel" src="{{ asset('./assets/recurso.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle" >Usuarios</h3>
            <a href="{{ route('users.users') }}"><img class="imagen_panel" src="{{ asset('./assets/grupo.png')}}"></a>
        </div>
        <div class="option-admin" href="">
            <h3 class="subtitle" >Registrar nuevo usuario</h3>
            <a href="{{ route('register') }}"><img class="imagen_panel" src="{{ asset('./assets/usuario.png')}}"></a>
        </div>
    </div>
</div> --}}

<div class="d-flex justify-content-center panel_admin">

    <div class="card border d-flex shadow mb-5 bg-body rounded justify-content-center option-admin">
        <h6 class="card-header text-center">Recursos</h6>
        <div class="text-center">
            <img class="imagen_panel" src="{{ asset('./assets/recurso.png')}}" >
        </div> 
    </div>

    <div class="card border d-flex shadow mb-5 bg-body rounded justify-content-center option-admin">
        <h6 class="card-header text-center">Usuarios</h6>
        <div class="text-center">
            <img class="imagen_panel" src="{{ asset('./assets/recurso.png')}}" >
        </div> 
    </div>

    <div class="card border d-flex shadow mb-5 bg-body rounded justify-content-center option-admin">
        <h6 class="card-header text-center">Registrar usuario</h6>
        <div class="text-center">
            <img class="imagen_panel" src="{{ asset('./assets/recurso.png')}}" >
        </div> 
    </div>
</div>
