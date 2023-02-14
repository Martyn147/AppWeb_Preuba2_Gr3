<x-layouts.app.app title="Home">
    @guest
        <x-rol.guest.homeg/>
    @endguest
    @auth
        @switch(auth()->user()->type_user)
            @case("Administrador")
                Opciones Administrador
                @break
            @case("Cliente")
                <br>
                <div>
                    <h3>Opcion Usuario</h3>
                </div>
                <br>
                @break
            @case("Afiliado")
                <br>
                <div style="height: 27rem">
                    <h3>Opcion no disponible con su Usuario</h3>
                </div>
                <br>
                @break
            @default
                @break
        @endswitch
    @endauth
</x-layouts.app.app>