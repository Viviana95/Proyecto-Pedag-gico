<h2 class="title">Añadir Recurso en formato {{$format->format}}</h2>

<div class="container-create">

    <div class="container-image-default">
        <img class ="image-default-format" src="{{asset ($image->image)}}">
    </div>

<div class="container-form">
    <div class="flex mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 form_create mt-2">
               

                <form action="{{route('means.store',['id'=>$format->id, 'language'=>$language])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <p class="text-form">Título</p>
                            <div class="form-floating mb-3">
                                <input type="text" name="title" class="form-control" id="floatingInput">
                                <label for="floatingInput"></label>
                            </div>
                        <p class="text-form">Lenguaje</p>
                            <div class="form-floating mb-3">
                                <select name="language" class="form-select" aria-label="Default select example">
                                    <option selected>Selecciona un lenguaje</option>
                                    @foreach ($language as $language)
                                    <option value="{{$language->id }}">{{$language->name }}</option>                                        
                                    @endforeach
                                </select>
                            </div>
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
                            <button class="btn_orange" href="{{route('means.index')}}">Cancelar</button>
                            <button class="btn_orange" type="submit">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
