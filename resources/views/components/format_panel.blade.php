
<div class="container_format">
    <h1 class="title">Elige el formato</h1>

    <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
            <h3 class="subtitle">Vídeo</h3>
            {{-- <a href="{{ route('means.create') }}"><img class="imagen_panel" src="{{ asset('./assets/play.png')}}"></a> --}}
            
             <a href="{{ url('/means/create'.$format->id) }}"><img class="imagen_panel" src="{{ asset('./assets/play.png')}}">
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Link</h3>
            <a href="{{ route('means.create', [$format->id == "1"]) }}"><img class="imagen_panel" src="{{ asset('./assets/enlace.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Documento</h3>
            <a href="{{ route('means.create', [$format->id == "3"]) }}"><img class="imagen_panel"
                    src="{{ asset('./assets/archivo.png')}}"></a>

        </div>
    </div>
</div>
