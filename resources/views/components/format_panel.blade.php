<div class="container_format">
    <h1 class="title">Elige el formato</h1>

    <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
            <h3 class="subtitle">Vídeo</h3>
            <a href="{{ route('means.create') }}"><img class="imagen_panel" src="{{ asset('./assets/play.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Link</h3>
            <a href="{{ route('means.create') }}"><img class="imagen_panel" src="{{ asset('./assets/enlace.png')}}"></a>
        </div>
        <div class="option-admin" href="">
            <h3 class="subtitle">Documento</h3>
            <a href="{{ route('means.create') }}" class="ml-6 text-sl font-bold text_login"><img class="imagen_panel"
                    src="{{ asset('./assets/archivo.png')}}"></a>

        </div>
    </div>
</div>
