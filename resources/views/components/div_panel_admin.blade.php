<link rel="stylesheet" href="{{ asset('css/panel_admin.css') }}">
<div class="container_panel_admin">
    <h1 class="title">Panel Administrador</h1>

    <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
             <h3 class="subtitle">Recursos subidos</h3>
             <a href="{{ route('means.index') }}"><img class="imagen_panel" src="{{ asset('./assets/archivo.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Usuarios</h3>
            <a href="{{ route('users.users') }}"><img class="imagen_panel" src="{{ asset('./assets/grupo.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Nuevo usuario</h3>
         @if (Route::has('register'))
            <a href="{{ route('register') }}"><img class="imagen_panel" src="{{ asset('./assets/usuario.png')}}"></a>
        @endif
        </div>
    </div>
</div>
