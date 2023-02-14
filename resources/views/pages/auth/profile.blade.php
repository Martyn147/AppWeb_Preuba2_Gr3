

<x-layouts.app.app title="Profile">
   <br>
   <h1>Configuración</h1>
      <div class="container p-3">
         <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PATCH')
            <div class="row">
               <div class="col-12 col-md-3 text-center">
                  <h5></h5>
                  <div class="container-fluid d-flex d-flex justify-content-center">
                     <div class="img-thumbnail" id="preview" style="width:180px; height: 180px; ">
                        <img 
                        src="{{$profile->image->url ?? 'https://cdn-icons-png.flaticon.com/512/149/149071.png'}}"
                        alt="Fotode perfil" style="width:170px; height: 170px;" id="image0">
                     </div>
                  </div>
              

                     <div>
                        <br>
                        <h5><b class="text-uppercase">{{auth()->user()->username}}</b></h5>
                        <p> {{auth()->user()->type_user}}</p>
                     </div>
                     
               </div>
               <div class="col-12 col-md-9" >
                  <h2 class="text-center"> Información de Perfil</h2>
                  @csrf
                  <x-partials.messages.messages  class="container"/>
                  <div class="container p-3 p-md-5">
                     <input type="text" placeholder="Nombre" name="name" class="form-control mb-3" value="{{$profile->name}}">
                     <input type="text" placeholder="Apellido" name="last_name" class="form-control mb-3" value="{{$profile->last_name}}">
                     <input type="email" placeholder="Correo Electronico" name="email" class="form-control mb-3" value="{{auth()->user()->email}}">
                     <input type="text" placeholder="Direccion" name="address" class="form-control mb-3"value="{{$profile->address}}">
                     <input type="text" placeholder="Teléfono" name="movil" class="form-control mb-3"value="{{$profile->movil}}">
                     <label>Foto de Perfil:</label>
                     <div class="input-group mb-3">
                           <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" class="form-control " id="image"/>
                           <button class="btn btn-outline-success" type="button" id="image">Subir</button>
                     </div>
                     
                     <div class="row ">
                        <div class="col-5 col-md-4 text-end" >
                           <label for="datenac"><b>Fecha de Nacimiento:</b></label>
                        </div>
                        <div class="col-7 col-md-7 col-lg-5 form-switch text-start ps-5  pe-5">
                           <input  class="form-control" type="date" name="birthday" id="datenac" max="{{date('Y-m-d',strtotime(date('Y-m-d').'-3 year'))}}" value='{!!$date=strval(date_format((auth()->user()->birthday),"Y-m-d"))!!}'>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Guardar" class="btn btn-success">
            </div>
            <script src="/js/preview.js"></script>
         </form>
      </div>

</x-layouts.app.app>