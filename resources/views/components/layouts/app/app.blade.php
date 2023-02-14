<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        {{--                                Fuente Logo                         --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
        {{-- ------------------------------------------------------------------ --}}
        <link rel="stylesheet" href="/css/style.css">
        {{-- <link rel="stylesheet" href="/css/style2.css"> --}}
        <meta name="color-scheme" content="light dark">
        <meta name="supported-color-schemes" content="light dark">
        <script src="/js/nav.js"></script>

 
        {{-- ------------------------------------------------------------------ --}}
        <title> Star-Restaurans {{$title ?? ''}}</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div><h1 style="font-family: 'Dancing Script', cursive;">Star-Restaurants</h1></div>
            <div class="d-none d-md-block">
                @auth
                    <div class="dropdown align-items-center" style="height: 40px">
                        <a class=" dropdown-toggle align-items-center" role="button" id="sesionMenu" data-bs-toggle="dropdown" aria-expanded="false" href="#" >
                            <span><small>{{auth()->user()->name}}</small></span>
                            <i class="bx bx-user-circle " style="font-size:40px" ></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sesionMenu">
                            <li><a class="dropdown-item" href="{{route('profile')}}"><i class='bx bx-user nav_icon'></i> <span>Perfil</span></a></li>
                            <li><a class="dropdown-item" href="{{route('setting'),$id=Auth::user()->id}}"><i class='bx bx-wrench nav_icon'></i> <span>Configurar</span></a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class='bx bx-log-out nav_icon'></i> <span> Cerrar Sesión </span></a></li>
                            <hr>
                            <li>
                                <div class="row text-center">
                                    <div class="col-4 text-end">
                                        <i class='bx bx-sun nav_icon'></i>
                                    </div>
                                    <div class="col-4 form-switch ">
                                        <input class="form-check-input" value="1" type="checkbox" id='bdark'disabled >
                                    </div>
                                    <div class="col-4  text-start">
                                        <i class='bx bx-moon nav_icon'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
    
        </header>
        <x-partials.other.navbar/>
        <div class="height-100 d-flex flex-column ">
            <main>
                {{$slot}}
            </main>
            <img src="" alt="">
            <footer>
                <x-partials.other.footer/>
            </footer>
        </div>
        
    </body>
</html>