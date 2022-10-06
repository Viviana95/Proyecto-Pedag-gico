
 {{--  <div class="container_img_admin">
    <div class="text-name">{{ Auth::user()->name }}</div>
    <img class="img_admin" src="{{ Auth::user()->avatar }}" alt="User Profile Picture">
    <input class="btn_select_file" name="image" type='file'>
  </div> --}}
  <div class="d-flex profile_container">
    <div class="card border d-flex shadow mb-5 bg-body rounded">
      <h5 class="card-header text-name">{{ Auth::user()->name }}</h5>
      <div>
        <img class="img_admin rounded-circle" src="{{ Auth::user()->avatar }}" alt="User Profile Picture">
        <input class="mb-3 btn_select_file" name="image" type='file'>
        {{-- <input type="file" name="file" class="form-control btn_select_file" id="floatingInput" placeholder=""> --}}
        
      </div>
    </div>

    
      
        <table class="table table-hover table-striped d-flex justify-content-start my_resources">
          <thead>
              <tr>
                <th scope="col">Title</th>
                {{-- <th scope="col">Image</th> --}}
                <th scope="col">Language</th>
                <th scope="col">Format</th>
                {{-- <th scope="col">File</th> --}}
                <th scope="col">Action</th>
              </tr>
            </thead>
      </table>
    
</div>
