<x-layouts.app.app title="Home">

    @guest
        <x-rol.guest.homeg/>
    @endguest
    @auth
        @switch(auth()->user()->type_user)
            @case("Administrador")
                <x-partials.other.carrusel/>
                @break
            @case("Cliente")
                <x-partials.other.carrusel/>
                @break
            @case("Afiliado")
                <x-partials.other.carrusel/>
                @break
            @default
                @break
        @endswitch
    @endauth

    <section>
        <div class="container-fluid">
            <hr>
            <div class="container-fluid card-group mt-4 " >
              <div class="card text-center">
                <img src="https://lanoticia.com/wp-content/uploads/2022/02/como-preparar-alitas-de-pollo-con-salsas-deliciosas-scaled.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h4 class="card-title">Alitas en Salsa</h4>
                  <p class="card-text">unas alitas acompañadas de salsa bbq y un toque de picante son la esencia de uno de los platillos más sabrosos preparados con pollo. Contamos con diferentes Salsas las cuales quedan a su eleccion. </p>
                </div>
              </div>
              <div class="card text-center ">
                <div class="card-body">
                  <h4 class="card-title">Hot Dog</h4>
                  <p class="card-text">Panecillo largo lleno con una salchicha de Frankfurt, que se consume caliente, y untado de mostaza ligeramente dulce. Esta expresión estadounidense, aparecida hacia 1930, significa “perro caliente”.</p>
                </div>
                <img src="https://www.latam.aviko.com/media/7625157/hotdog1.jpg?height=400&width=610&scale=both&mode=crop-up" class="card-img-top" alt="..." />
              </div>
              <div class="card text-center">
                <img src="https://progcarne.com/storage/app/uploads/public/608/6d1/8b0/6086d18b065a7811052900.jpg" class="card-img-top" alt="..."\>
                <div class="card-body">
                  <h4 class="card-title">Hamburguesa Doble</h4>
                  <p class="card-text">Hamburguesa de Res Doble Carne, lechuga, tomate, mayonesa de la casa, salsa de tomate, Acompañado de una rica salsa BBQ o a su eleccion entre diferentes tipos.
                    Acompañado de papas fritas.</p>
                </div>
              </div>
            </div>
          </div>
</x-layouts.app.app>