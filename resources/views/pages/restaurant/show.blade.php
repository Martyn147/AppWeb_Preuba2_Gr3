<x-layouts.app.app title="{{$restaurant->name_local}}">
    <hr>
    <div class="d-flex align-items-center justify-content-between ps-4 pe-3">
        <h1>{{$restaurant->local_name}}</h1>
        <small>{{$restaurant->updated_at->diffForHumans()}}</small>
    </div>
    <div class="card" style="">
        <img 
        src="{{$restaurant->image->url ?? 'https://res.cloudinary.com/dpptziu2k/image/upload/v1674111594/StarRestaurants/web_image/photo-1600891964599-f61ba0e24092_ry8ses.jpg'}}" 
        alt="...">
        <div class="card-body"> 
            <b>Descrición:</b><br>

            @if (isset($restaurant->description))
                <p class="card-text ms-3">{{$restaurant->description}}</p>
            @else
                <p class="card-text ms-3">Este es un restaurante más, registrado en esta plataforma :D .....
                    
                    Uno de los mejores restaurantes para visitar es El Cielo. Está ubicado en el centro de la ciudad, ofreciendo una experiencia gastronómica única. El ambiente es relajante y acogedor, con una decoración contemporánea y moderna. La comida es exquisita, con una variada selección de platos tanto para los amantes de la comida tipica como para los amantes de la comida internacional.
                </p>
            @endif
          
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Categoria:</b><br> <p class="card-text ms-3">{{$restaurant->type_local}}</p></li>
            <li class="list-group-item"><b>RUC/RIMPE:</b><br> <p class="card-text ms-3">{{$restaurant->ruc}}</p> </li>
            <li class="list-group-item"><b>Dirección:</b><br><p class="card-text ms-3">{{$restaurant->local_address}}</p></li>
            <li class="list-group-item"><b>Dueño/Gerente:</b><br> <p class="card-text ms-3">{{$restaurant->owner_name}}</p></li>
            
            @if (isset($restaurant->local_email))
                <li class="list-group-item"><b>Correo: </b><br><p class="card-text ms-3">{{$restaurant->local_email}}</p></li>
            @endif
            @if (isset($restaurant->local_tel))
                <li class="list-group-item"><b>Telefono:</b><br> <p class="card-text ms-3">{{$restaurant->local_tel}}</p></li>
            @endif
    
        </ul>
        <div class="card-body">
          <a href="restaurants/{{$restaurant->id}}" class="card-link">Ver más...</a>
        </div>
        <hr>
        <div>
            <small>{{$restaurant->updated_at->diffForHumans()}}</small>
        </div>

    </div>
</x-layouts.app.app>