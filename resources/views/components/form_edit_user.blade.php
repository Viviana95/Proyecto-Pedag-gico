<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('users.update', ['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                         <div class="form-floating mb-3">
                            <input type="text" name="name" value="{{$user->name ?? old('name')}}" class="form-control" id="floatingInput" placeholder="New Name">
                            <label for="floatingInput">NOMBRE</label>
                         </div>
                         <div class="form-floating mb-3">
                            <input type="text" name="email" value="{{$user->email ?? old('email')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">E-MAIL</label>
                         </div>
                         <div class="btn_container">
                            <button type="submit" class="btn btn_modificar">Modificar</button>
                            <button class="btn btn_modificar"><a  href="{{route('users.users')}}">Cancelar</a></button>
                         </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
