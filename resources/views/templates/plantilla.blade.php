<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            <li><a href="{{route('eventos.show')}}">Eventos</a></li>
            <li><a href="{{route('eventos.index')}}">Index</a></li>
        </ul>
    </nav>
    @yield('contenido')
</body>
<footer>
    <hr>
    <p>Creado por Andrés Lapuente Sola</p>
</footer>
</html>