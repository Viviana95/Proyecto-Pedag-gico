<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('means.update', ['id'=>$mean->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                         <div class="form-floating mb-3">
                            <input type="text" name="title" value="{{$mean->title ?? old('lenguage')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">TITLE</label>
                         </div>
                         <div class="form-floating mb-3">
                            <select name="lenguage" value="{{$mean->lenguage ?? old('lenguage')}}" class="form-select" aria-label="Default select example">

                                <option selected>Open this select menu </option>
                                <option value="Java" {{$mean->lenguage == "Java" ? 'selected' : ''}}>Java</option>
                                <option value="Php" {{$mean->lenguage == "Php" ? 'selected' : ''}}>Php</option>
                                <option value="Javascript" {{$mean->lenguage == "Javascript" ? 'selected' : ''}}>Javascript</option>
                              </select>
                            <label for="floatingInput">LENGUAGE</label>
                         </div>
                         <div class="form-floating mb-3">
                            <input type="file" name="image" value="{{$mean->image ?? old('image')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">IMAGE</label>
                         </div>
                         <div class="form-floating mb-3">
                            <select name="format" value="{{$mean->format ?? old('format')}}" class="form-select" aria-label="Default select example">

                                <option selected >Open this select menu </option>
                                <option value="Pdf"{{$mean->format == "Pdf" ? 'selected' : ''}}>Pdf</option>
                                <option value="Video"{{$mean->format == "Video" ? 'selected' : ''}}>Video</option>
                                <option value="Enlace"{{$mean->format == "Enlace" ? 'selected' : ''}}>Enlace</option>
                              </select>
                              <label for="floatingInput">FORMAT</label>

                         </div>
                         <div class="form-floating mb-3">
                            <input type="file" name="file" value="{{$mean->file ?? old('file')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">FILE</label>
                         </div>

                         <div class="btn_container">
                            <button type="submit" class="btn btn-modificar">Modificar</button>
                            <button class="btn btn-cancelar"><a  href="{{route('means.index')}}">Cancelar</a></button>
                         </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
