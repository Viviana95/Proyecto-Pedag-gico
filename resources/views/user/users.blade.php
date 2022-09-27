@include('layouts.layout')
<x-app-layout>
<x-slot name="header">
    <div class="">
      <x-nav_home_admin></x-nav_home_admin>
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">E-mail</th>
                            </tr>
                          </thead>
                          <tbody>
                           @foreach ($users as $user)
                             <tr>
    
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>
                              <form action="{{ route('users.edit', $user->id) }}" method="post">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                              <form action="{{route('users.destroy', $user->id)}}" method="Post" class="formDelete">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger">Eliminar</button>
                              </form>
                            </tr>
                          </tbody>
                        @endforeach
                      </table>
                      <div>{{ $users->links() }}</div>
                </div>
            </div>
        </div>
    </div>
        </x-slot>
      </x-app-layout>