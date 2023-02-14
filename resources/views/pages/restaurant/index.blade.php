<x-layouts.app.app title="Resturantes">
    <h1>Resturantes</h1>
    <p>{{ session('status') }}</p>
    <hr>

    <div class="container m-2 text-end">
        
        <a name="" id="" class="btn btn-dark" href="{{route('restaurants.create')}}" role="button">Crear Nuevo</a>
        
    </div>
    @foreach ($restaurants as $restaurant)
    <div class="card">
        <div class="bg bg-dark text-light p-1 text-end mb-2 pe-5">
            <small>{{$restaurant->updated_at->diffForHumans()}}</small>
        </div>
        <div class="row align-items-center ">
            <div class="col-12 col-sm-3 col-md-4">
                <div class="container-fluid">
                    <img
                        src="{{$restaurant->image->url ?? 'https://res.cloudinary.com/dpptziu2k/image/upload/v1674111594/StarRestaurants/web_image/photo-1600891964599-f61ba0e24092_ry8ses.jpg'}}" 
                        alt="..." class="w-100">
                </div>
              
            </div>
            <div class="col-12 col-sm-9 col-md-8 ">
                
                <div class="row align-items-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="card-body">
                            <a href="restaurants/{{$restaurant->id}}"><h5 class="card-title">{{$restaurant->local_name}}</h5></a>
                          
                            @if (isset($restaurant->description))
                                <p class="card-text">{{$restaurant->description}}</p>
                                <a href="restaurants/{{$restaurant->id}}" class="card-link">Ver más...</a>
                            @else
                                <p class="card-text">Este es un restaurante más, registrado en esta plataforma :D .....
                                    <br>
                                    Uno de los mejores restaurantes para visitar es El Cielo. Está ubicado en el centro de la ciudad, ofreciendo una experiencia gastronómica única. El ambiente es relajante y acogedor, con una decoración contemporánea y moderna. La comida es exquisita, con una variada selección de platos tanto para los amantes de la comida tipica como para los amantes de la comida internacional.
                                </p>
                                <a href="restaurants/{{$restaurant->id}}" class="card-link">Ver más...</a>
                            @endif
                          
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Dirección:</b> {{$restaurant->local_address}}</li>
                            <li class="list-group-item"> <b>Categoria:</b> {{$restaurant->type_local}}</li>
                            @if (isset($restaurant->local_email))
                                <li class="list-group-item"> <b>Correo:</b> {{$restaurant->local_email}}</li>
                            @endif
                            @if (isset($restaurant->local_tel))
                                <li class="list-group-item"><b>Telefono:</b> {{$restaurant->local_tel}}</li>
                            @endif
                            
                        </ul>
                        
                    </div>
                    <div class="col-12 col-md-2 col-lg-3 text-center">
                        <a name="" id="" class="btn btn-dark" href="restaurants/{{$restaurant->id}}/edit"  style="width: 130px "role="button">Editar</a>

                        <form action="{{route('restaurants.destroy',$restaurant)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn btn-dark mt-3" style="width: 130px" >Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <hr>
        
        
    </div>
        
    @endforeach
</x-layouts.app.app>