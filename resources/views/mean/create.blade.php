<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">  
                <form action="{{route('means.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div>
                     <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Añade Título">
                        <label for="floatingInput">TITLE</label>
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
                        <input type="file" name="image" class="form-control" id="floatingInput" placeholder="Añadir Imagen">
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
                        <input type="text" name="file" class="form-control" id="floatingInput" placeholder="Añadir Enlace">
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
