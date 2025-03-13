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
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Crear </a></li>
        </ul>
    </nav>
    @yield('contenido')
</body>
<footer>
    <hr>
    <p>Creado por Andrés Lapuente Sola</p>
</footer>
</html>