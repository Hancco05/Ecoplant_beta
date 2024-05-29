<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Contáctanos</h1>
    
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf <!-- Agrega el token CSRF -->
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Mensaje:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

