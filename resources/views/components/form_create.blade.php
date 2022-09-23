@Include('layouts.layout')

<div class="py-12 flex">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="p-6 form_create">
            <form action="{{route('means.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <div class="form-floating mb-3">

                        <input type="text" name="title" class="form-control" id="floatingInput"
                            placeholder="name@example.com">

                        <label for="floatingInput">TITULO</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="lenguage" class="form-select" aria-label="Default select example">

                            <option selected>Open this select menu </option>
                            <option value="Java">Java</option>
                            <option value="Php">Php</option>
                            <option value="Javascript">Javascript</option>
                        </select>
                        <label for="floatingInput">LENGUAGE</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">IMAGE</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="format" class="form-select" aria-label="Default select example">

                            <option selected>Open this select menu </option>
                            <option value="Pdf">Pdf</option>
                            <option value="Video">Video</option>
                            <option value="Enlace">Enlace</option>
                        </select>
                        <label for="floatingInput">FORMAT</label>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="file" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">FILE</label>
                    </div>

                    <div class="btn_container">

                        <button class="btn btn_orange" type="submit"
                                href="{{route('means.index')}}">Añadir</button>
                        <button class="btn btn_orange" href="{{route('means.index')}}">Cancelar</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
