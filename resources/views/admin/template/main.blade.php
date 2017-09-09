<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>@yield('title','default')| Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ asset('trumbowyg/dist/ui/trumbowyg.css')}}">

</head>

<body>
    <div class="container">
        @include('admin.template.partials.nav')

        <section>
            @include('flash::message')
            @yield('content')
        
        </section>

        <footer>
        
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