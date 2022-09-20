<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">  
                <form action="{{route('means.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div>
                     <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">TITLE</label>
                     </div>
                     <div class="form-floating mb-3">
                        <input type="text" name="lenguage" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">LENGUAGE</label>
                     </div>
                     <div class="form-floating mb-3">
                        <input type="text" name="image" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">IMAGE</label>
                     </div>
                     <div class="form-floating mb-3">
                        <input type="text" name="format" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">FORMAT</label>
                     </div>
                     <div class="form-floating mb-3">
                        <input type="text" name="file" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">FILE</label>
                     </div>
                   
                     <div class="btn" role="group" aria-label="Basic mixed styles example">
                       
                        <button type="submit" class="btn btn-outline-success">Añadir</button>
                        <button><a  href="{{route('means.index')}}" class="btn btn-outline-danger">Cancelar</a></button>
                
                    </div>
                </div>
                </form>              

               
                  
            </div>
        </div>
    </div>
</div>
