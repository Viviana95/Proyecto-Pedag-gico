<div class="d-flex profile_container">
    <div class="card border d-flex shadow mb-5 bg-body rounded">
        <h5 class="card-header text-center subtitle">{{ Auth::user()->name }}</h5>
        <div class="text-center">
            <img class="img_admin rounded-circle" src="{{ Auth::user()->avatar }}" alt="User Profile Picture">

            {{-- <input type="file" name="file" class="form-control btn_select_file" id="floatingInput" placeholder=""> --}}
            {{-- <form action="subirArchivo.php" method="post" enctype="multipart/form-data" class="center"> --}}
                <input type="file" id="inputarchivo" name="file" style="display: none;" required><br>
                <button><label for="inputarchivo" class="select-file p-1 mb-1" id="labelarchivo">Cambiar imagen</label></button>
                <br>

                {{-- </form> --}}
            </div>
            <x-progressbar></x-progressbar>
        </div>

        <div class="resources_container m-5">
        <table class="table table-hover table-striped">
          <thead>
              <tr>
                <th scope="col">Título</th>
                {{-- <th scope="col">Image</th> --}}
                <th scope="col">Lenguaje</th>
                <th scope="col">Formato</th>
                {{-- <th scope="col">File</th> --}}
                <th scope="col">Acción</th>
              </tr>
            </thead>
      </table>
    </div>
</div>
