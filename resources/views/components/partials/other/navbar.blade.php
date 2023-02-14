
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="{{route('home')}}" class="nav_logo"> <i class='bx bx-restaurant  nav_logo-icon'></i> </i> <span class="nav_logo-name">Star Restaurants</span> </a>
            <div class="nav_list">
                <a href="{{route('home')}}" class="nav_link {{navActive('home')}}"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                <a href="{{route('restaurants')}}" class="nav_link {{navActive('restaurants.*')}}"> <i class='bx bx-basket nav_icon'></i> <span class="nav_name">Restaurantes</span> </a>
                @auth
                    @switch(auth()->user()->type_user)
                        @case("Administrador")
                            <a href="{{route('search')}}" class="nav_link {{navActive('search')}}"> <i class='bx bx-search nav_icon'></i> <span class="nav_name">Buscar</span> </a>
                            <a href="{{route('places')}}" class="nav_link {{navActive('places')}} "> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Ubicaciones</span> </a>
                            @break
                        @case("Cliente")
                            <a  href="{{route('search')}}" class="nav_link {{navActive('search')}}"> <i class='bx bx-search nav_icon'></i> <span class="nav_name">Buscar</span> </a>
                            <a href="{{route('places')}}" class="nav_link {{navActive('places')}}"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Ubicaciones</span> </a>
                            @break
                        @case("Afiliado")
                            <a href="{{route('categorias.index')}}" class="nav_link {{navActive('categorias.index')}}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Categorias</span> </a>
                            <a href="{{route('contact')}}" class="nav_link {{navActive('contact')}}"> <i class=' bx bx-receipt nav_icon'></i> <span class="nav_name">Platos</span> </a>
                            @break
                        @default
                            @break
                    @endswitch
                @endauth
                <a href="{{route('about')}}" class="nav_link {{navActive('about')}}"> <i class='bx bx-info-circle nav_icon'></i> <span class="nav_name">Acerca de Nosotros</span> </a>
                <a href="{{route('contact')}}" class="nav_link {{navActive('contact')}}"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Contactos</span> </a>
        </div>
        
        <div class="nav_list">
            <hr style="background-color: rgb(240, 248, 255)">
            @auth
                <a href="{{route('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesión</span> </a>
            @endauth
            @guest
                <a href="{{route('login')}}" class="nav_link"> <i class='bx bx-log-in nav_icon'></i> <span class="nav_name">Iniciar Sesión</span> </a>
            @endguest
        </div>
    </nav>
    

</div>
