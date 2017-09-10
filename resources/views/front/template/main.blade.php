<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>@yield('title','default')| Blog</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ asset('trumbowyg/dist/ui/trumbowyg.css')}}">

</head>

<body>
    <header>
    <div class="container">
        @include('front.template.partials.header')
    </header>

    <div class="container">
        @yield('content')
        @include('flash::message')
    </div>

        <footer>
            <hr>
                Todos los derechos reservados &copy {{date('Y')}}
        </footer>
    </div>
    <!--documentacion: 
        https://harvesthq.github.io/chosen/ - diseño cajas
        https://alex-d.github.io/Trumbowyg/documentation/ - diseño textarea
    
    
    -->
  
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('chosen/chosen.jquery.js')}}"></script>

    <script src="{{ asset('trumbowyg/dist/trumbowyg.js')}}"></script>

    
    @yield('js')

</body>

</html>