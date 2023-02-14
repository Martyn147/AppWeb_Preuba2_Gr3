

<x-layouts.app.app title="Profile">
   <br>
   <h1>Configuración</h1>
      <div class="container p-3">
         <form action="" method="post">
            <div class="row">
               <div class="col-12 col-md-3 text-center">
                  <h5></h5>
                     <img class="rounded-circle bg-dark" 
                     src="{{$profile->image->url ?? 'https://cdn-icons-png.flaticon.com/512/149/149071.png'}} " alt="Foto de Perfil" width="100px">
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
                     
                     <input type="text" placeholder="Nombre" name="name" class="form-control mb-3" value="{{$profile->name}}" disabled>
                     <input type="text" placeholder="Apellido" name="last_name" class="form-control mb-3" disabled value="{{$profile->last_name ?? ' '}}">
                     <input type="email" placeholder="Correo Electronico" name="email" class="form-control mb-3" value="{{auth()->user()->email}}" disabled>
                     <input type="text" placeholder="Direccion" name="address" class="form-control mb-3"value="{{$profile->address ?? ' '}}" disabled>
                     <input type="text" placeholder="Teléfono" name="movil" class="form-control mb-3" disabled value="{{$profile->movil ?? ' '}}">
                     <div class="row ">
                        <div class="col-5 col-md-4 text-end" >
                           <label for="datenac"><b>Fecha de Nacimiento:</b></label>
                        </div>
                        <div class="col-7 col-md-7 col-lg-5 form-switch text-start ps-5  pe-5">
                           <input  class="form-control" type="date" name="birthday" id="datenac" max="{{date('Y-m-d',strtotime(date('Y-m-d').'-3 year'))}}" value='{!!$date=strval(date_format((auth()->user()->birthday),"Y-m-d"))!!}'disabled>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>

</x-layouts.app.app>