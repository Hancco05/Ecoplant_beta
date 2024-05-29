<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Ecoplant</title>
</head>
<body>
    <h1>Bienvenido a Ecoplant</h1>
    
    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('news.index') }}">Blog</a></li>
            <li><a href="{{ route('contact.index') }}">Contacto</a></li>
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a href="{{ route('register') }}">Registrarse</a></li>
        </ul>
    </nav>
</body>
</html>

