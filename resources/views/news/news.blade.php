<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <h1>Noticias</h1>
    <ul>
        @foreach ($news as $newsItem)
            <li>
                <a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a><br>
                <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" width="100"><br>
                <p>{{ $newsItem->description }}</p>
                <p>Escrito por: {{ $newsItem->author->name }}</p>
                <p>Etiqueta: {{ $newsItem->tag }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
