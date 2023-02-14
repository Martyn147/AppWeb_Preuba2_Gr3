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
        <meta name="color-scheme" content="light dark">
        <meta name="supported-color-schemes" content="light dark">
        <script src="/js/nav.js"></script>
        <script src="/js/darkmode.js"></script>
        {{-- ------------------------------------------------------------------ --}}
        <title> Star-Restaurans {{$title ?? ''}}</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div><h1 style="font-family: 'Dancing Script', cursive;">Star-Restaurants</h1></div>
    
        </header>
        <x-partials.other.navbar/>
        <div class="height-100">
            <main>
                {{$slot}}
            </main>
            <footer>
                <x-partials.other.footer/>
            </footer>
        </div>
    </body>
</html>