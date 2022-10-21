<h2 class="title">Editar Recurso en formato {{$format->format}}</h2>
<div class="flex mt-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="form_edit p-6">
            <form action="{{route('means.update', ['id'=>$mean->id, 'id'=>$format->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <h3 class="text-form">Título</h3>
                    <div class="form-floating mb-3">
                        <input type="text" name="title" value="{{$mean->title ?? old('lenguage')}}" class="form-control"
                            id="floatingInput" placeholder="Título Nuevo">

                    </div>
                    <h3 class="text-form">Lenguaje</h3>
                    <div class="form-floating mb-3">
                        <select name="lenguage" value="{{$mean->lenguage ?? old('lenguage')}}" class="form-select"
                            aria-label="Default select example">

                            <option selected>Open this select menu </option>
                            <option value="Java" {{$mean->lenguage == "Java" ? 'selected' : ''}}>Java</option>
                            <option value="Php" {{$mean->lenguage == "Php" ? 'selected' : ''}}>Php</option>
                            <option value="Javascript" {{$mean->lenguage == "Javascript" ? 'selected' :
                                ''}}>Javascript</option>
                        </select>

                    </div>
                    <h3 class="text-form">Archivo</h3>
                    @if ($format->id > 1)
                            <p class="text-form">Añade Archivo</p>
                                <div class="form-floating mb-3">
                                    <input type="file" name="file" class="form-control" id="floatingInput" placeholder="">
                                </div>
                        @elseif ($format->id = 1)
                            <p class="text-form">Añade Enlace</p>
                                 <div class="form-floating mb-3">
                                    <input type="text" name="link" class="form-control" id="floatingInput" placeholder="">
                                </div>
                        @endif

                    <div class="btn_container">
                        <button class="btn_orange"><a href="{{route('means.index')}}">Cancelar</a></button>
                        <button type="submit" class="btn_orange">Modificar</button>
                    </div>

                </div>
            </form>

        </div>
    </div>

</div>
