<h2 class="title">Editar Recurso</h2>
<div class="flex mt-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="form_edit p-6">
            <form action="{{route('means.update', ['id'=>$mean->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <h3 class="text-form">Título</h3>
                    <div class="form-floating mb-3">
                        <input type="text" name="title" value="{{$mean->title ?? old('language')}}" class="form-control"
                            id="floatingInput" placeholder="name@example.com">

                    </div>
                    <h3 class="text-form">Lenguaje</h3>
                    <div class="form-floating mb-3">
                        <select name="language" value="{{$mean->language ?? old('language')}}" class="form-select"
                            aria-label="Default select example">

                            <option selected>Open this select menu </option>
                            <option value="Java" {{$mean->language == "Java" ? 'selected' : ''}}>Java</option>
                            <option value="Php" {{$mean->language == "Php" ? 'selected' : ''}}>Php</option>
                            <option value="Javascript" {{$mean->language == "Javascript" ? 'selected' :
                                ''}}>Javascript</option>
                        </select>

                    </div>
                    <div class="form-floating mb-3">
                        {{-- <h3 class="text-form">Imagen</h3> --}}
                        {{-- <input type="file" name="image" value="{{$mean->image ?? old('image')}}"
                            class="form-control" id="floatingInput" placeholder="name@example.com"> --}}
{{--
                        <input type="file" id="inputarchivo" name="file" value="{{$mean->image ?? old('image')}}"
                            style="display: none;" required><br> --}}
{{--
                        <button><label for="inputarchivo" class="form-control" id="labelarchivo">Cambiar
                                imagen</label></button>
                        <br> --}}

                    </div>
                    <h3 class="text-form">Formato</h3>
                    <div class="form-floating mb-3">
                        <select name="format" value="{{$mean->format ?? old('format')}}" class="form-select"
                            aria-label="Default select example">

                            <option selected>Selecciona el formato </option>
                            <option value="Pdf" {{$mean->format == "Pdf" ? 'selected' : ''}}>Pdf</option>
                            <option value="Video" {{$mean->format == "Video" ? 'selected' : ''}}>Video</option>
                            <option value="Enlace" {{$mean->format == "Enlace" ? 'selected' : ''}}>Enlace
                            </option>
                        </select>


                    </div>
                    <h3 class="text-form">Archivo</h3>
                    <div class="form-floating mb-3">
                        <input type="file" name="file" value="{{$mean->file ?? old('file')}}" class="form-control"
                            id="floatingInput" placeholder="name@example.com">

                        <input type="file" id="inputarchivo" name="file" value="{{$mean->file ?? old('image')}}"
                            style="display: none;" required><br>
                        <button><label for="inputarchivo" class="form-control" id="labelarchivo">Selecciona un
                                archivo</label></button>
                        <br>

                    </div>

                    <div class="btn_container">
                        <button type="submit" class="btn_orange">Modificar</button>

                        <button class="btn_orange"><a href="{{route('means.index')}}">Cancelar</a></button>
                    </div>

                </div>
            </form>

        </div>
    </div>

</div>
