<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>@yield('title','default')| Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">

</head>

<body>
    <div class="container">
        @include('admin.template.partials.nav')

        <section>
        
            @yield('content')
        
        </section>

        <footer>
        
        </footer>
    </div>

    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>