<x-layouts.app.app title="Resturantes">
    <h1>Resturantes</h1>
    <div class="container">
      <x-partials.messages.messages  class="container"/>
      <form action="{{route('restaurants.store')}}" method="post" enctype="multipart/form-data">
        <div class="row align-items-center">
            <div class="col-12 col-sm-9 col-lg-8">
              @csrf
            <input type="text" name="ruc" class="form-control p-2 mt-2 mr-2 ml-2" placeholder="Ruc / RIMPE">
            <input type="text" name="local_name" class="form-control p-2 mt-2 mr-2 ml-2" placeholder="Nombre del Restauante/Local">
            <input type="text" name="local_address" class="form-control p-2 mt-2 mr-2 ml-2" placeholder="Dirección del Restauante/Local">
            <input type="text" name="owner_name" class="form-control p-2 mt-2 mr-2 ml-2" placeholder="Nombre del Gerente o Dueño ">
            <input type="email" name="local_email" class="form-control p-2 mt-2 mr-2 ml-2" placeholder="Correo Electronico (Opcional)">
            <input type="tel" name="local_tel" class="form-control p-2 mt-2 mr-2 ml-2" placeholder="Teléfono (Opcional)">
            <label for="type_local" class="mt-2"><b>Categoria :</b></label>
            <div class="container">
              <label>
                  <input type="radio" name="type_local" value="Restaurante" value="{{ old('type_local') }}">
                  Restaurante
              </label>
              <label>
                  <input type="radio" name="type_local" value="Comida Rapida" value="{{ old('type_local') }}">
                  Comida Rapida
              </label>
              <label>
                <input type="radio" name="type_local" value="Cafeteria" value="{{ old('type_local') }}">
                Cafeteria
              </label>
              <label>
                  <input type="radio" name="type_local" value="Bar" value="{{ old('type_local') }}">
                  Bar
              <label>
                  <input type="radio" name="type_local"id="imge" value="Miselanea" value="{{ old('type_local') }}">
                  Miselanea
              </label>
            </div>
            <textarea name="description" class="form-control p-2 mt-2 mr-2 ml-2 mb-2" cols="30" rows="2" placeholder="Escriba un descripción o mensaje al público (Opcional)"></textarea>
            <label for="image"><b>Logo (Opcional):</b> </label>
              <input type="file" name="avatar" accept="image/png, image/gif, image/jpeg" class="form-control mt-1" id="image"/>
            <div class="container-fluid m-3 text-center">
              <input type="submit" value="Guardar" class="btn btn-dark mb-">
            </div>
          </div>
          <div class="col-12 col-sm-3 col-lg-4">
            <div class="container-fluid d-flex d-flex justify-content-center">
                <div class="img-thumbnail" id="preview" style="width:180px; height: 180px; ">
                          <img
                          src="{{$profile->image->url ?? 'https://img.freepik.com/vector-gratis/insignia-restaurante-estilo-retro_23-2147505970.jpg?1&w=740&t=st=1674097597~exp=1674098197~hmac=9292eb5ce400ab65645d5604acb90c23b05a0f19e00b8013b0bf0d16a0fe04a5'}}"
                          alt="Fotode perfil" style="width:170px; height: 170px;" id="image0">
                </div>
            </div>
        </div>
        
      </form>
      <script src="/js/preview.js"></script>
    </div>
  </x-layouts.app.app>