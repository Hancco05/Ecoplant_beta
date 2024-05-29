@extends('layouts.app')

@section('content')
<h1>Editar noticia</h1>
<form action="{{ route('news.update', $news->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title" value="{{ $news->title }}"><br>
    <label for="content">Contenido:</label><br>
    <textarea id="content" name="content">{{ $news->content }}</textarea><br>
    <label for="tag">Etiqueta:</label><br>
    <input type="text" id="tag" name="tag" value="{{ $news->tag }}"><br>
    <button type="submit">Actualizar</button>
</form>
@endsection
