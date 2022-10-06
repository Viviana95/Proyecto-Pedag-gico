<div class="container_img_admin">



    <img class="img_admin" src="{{ Auth::user()->avatar }}" alt="User Profile Picture">
    <input
    class="btn_select_file"
    name="image" type='file'>
</div>

<div class="text-login">{{ Auth::user()->name }}</div>

<table class="table table-hover">
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
<x-progress_bar></x-progress_bar>
