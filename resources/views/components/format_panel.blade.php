
<div class="container_format">
   
   
    <h1 class="title">Elige el formato</h1>
   
    <div class="d-flex justify-content-center panel_admin">
        <div class="option-admin">
            <h3 class="subtitle">Enlace</h3>
            <a href="{{route('means.create', ['id'=>$format[0]->id])}}"><img class="imagen_panel" src="{{ asset('./assets/enlace.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Archivo</h3>
            <a href="{{route('means.create', ['id'=>$format[1]->id])}}"><img class="imagen_panel" src="{{ asset('./assets/archivo.png')}}"></a>
        </div>
        <div class="option-admin">
            <h3 class="subtitle">Video</h3>
            <a href="{{route('means.create', ['id'=>$format[2]->id])}}"><img class="imagen_panel"
                    src="{{ asset('./assets/play.png')}}"></a>

        </div>
    </div>
</div>
