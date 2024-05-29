<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoplant</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            @guest
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a href="{{ route('register') }}">Registrarse</a></li>
            @else
            <li><a href="{{ route('news.index') }}">Noticias</a></li>
            <li><form action="{{ route('logout') }}" method="POST">@csrf<button type="submit">Cerrar Sesión</button></form></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
