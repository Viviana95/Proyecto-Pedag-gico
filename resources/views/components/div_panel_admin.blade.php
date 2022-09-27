<link rel="stylesheet" href="{{ asset('css/panel_admin.css') }}">
<div class="container_panel_admin">
    <h1 class="title_panel_admin">Panel Administrador</h1>

    <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
             <h3 class="title-option-admin">Recursos subidos</h3>
             <a href="{{ route('means.index') }}"><img class="imagen_panel" src="{{ asset('./assets/archivo.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="title-option-admin">Usuarios</h3>
            <a href="{{ route('users.users') }}"><img class="imagen_panel" src="{{ asset('./assets/grupo.png')}}"></a>
        </div>
        <div class="option-admin" href="">
            <h3 class="title-option-admin">Registrar nuevo usuario</h3>
            <a href="{{ route('register') }}" class="ml-6 text-sl font-bold text_login"><img class="imagen_panel" src="{{ asset('./assets/usuario.png')}}"></a>
        </div>
    </div>
</div>
