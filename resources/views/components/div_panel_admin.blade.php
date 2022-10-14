<link rel="stylesheet" href="{{ asset('css/panel_admin.css') }}">
<div class="container_panel_admin">
    <h1 class="title">Panel Administrador</h1>

    <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
            <div class="subtitle-container">
                <h3 style="fint-sice:10vw"class="subtitle">Recursos</h3>
            </div>
            <a href="{{ route('means.index') }}"><img class="imagen_panel" src="{{ asset('./assets/recurso.png')}}"></a>
        </div>
        <div class="option-admin">
            <div class="subtitle-container">
                <h3 class="subtitle">Usuarios</h3>
            </div>
            <a href="{{ route('users.users') }}"><img class="imagen_panel" src="{{ asset('./assets/grupo.png')}}"></a>
        </div>
        <div class="option-admin" href="">
            <div class="subtitle-container">
                <h3 class="subtitle">Registrar usuario</h3>
            </div>
            <a href="{{ route('register') }}"><img class="imagen_panel" src="{{ asset('./assets/usuario.png')}}"></a>
        </div>
    </div>
</div>
