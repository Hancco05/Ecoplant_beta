<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $newsItem->title }}</title>
</head>
<body>
    <h1>{{ $newsItem->title }}</h1>
    <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" width="300"><br>
    <p>{{ $newsItem->description }}</p>
    <p>Escrito por: {{ $newsItem->author->name }}</p>
    <p>Etiqueta: {{ $newsItem->tag }}</p>
    <a href="{{ route('news.index') }}">Volver a noticias</a>
</body>
</html>
