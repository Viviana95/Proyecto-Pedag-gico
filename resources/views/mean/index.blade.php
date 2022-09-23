@include('layouts.layout')

<div class="">
  <x-nav_home_admin></x-nav_home_admin>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 bg-white border-b border-gray-200">

                <a type="button" class="btn btn-warning" href="{{route('means.create')}}">Añadir</a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Image</th>
                          <th scope="col">Language</th>
                          <th scope="col">Format</th>
                          <th scope="col">File</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($means as $mean)
                         <tr>

                          <td>{{$mean->id}}</td>
                          <td>{{$mean->title}}</td>
                          <td><img src="{{ asset('storage/'.$mean->image)}}" alt="..."></td>
                          <td>{{$mean->lenguage}}</td>
                          <td>{{$mean->format}}</td>
                          <td>{{$mean->file}}</td>
                          <td>
                          {{-- <a type="button" class="btn btn-warning" href="{{route('means.edit', $mean->id)}}">Editar</a> --}}
                          <form action="{{ route('means.edit', $mean->id) }}" method="post">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                          <form action="{{route('means.destroy', $mean->id)}}" method="Post" class="formDelete">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                        </tr>
                      </tbody>
                    @endforeach
                  </table>
                  <div>{{ $means->links() }}</div>
            </div>
        </div>
    </div>
<x-footer></x-footer>
