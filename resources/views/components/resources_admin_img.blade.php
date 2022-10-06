<div class="d-flex profile_container">
    <div class="card border d-flex shadow mb-5 bg-body rounded">
      <h5 class="card-header text-name">{{ Auth::user()->name }}</h5>
      <div>
        <img class="img_admin rounded-circle" src="{{ Auth::user()->avatar }}" alt="User Profile Picture">
        <input class="mb-3 btn_select_file" name="image" type='file'>
        {{-- <input type="file" name="file" class="form-control btn_select_file" id="floatingInput" placeholder=""> --}}
      </div>
    </div>

    <div class="justify-content-start resources_container">
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
