@extends('layouts.app')

@section('content')
<h1>Crear nueva noticia</h1>
<form action="{{ route('news.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Contenido:</label><br>
    <textarea id="content" name="content"></textarea><br>
    <label for="tag">Etiqueta:</label><br>
    <input type="text" id="tag" name="tag"><br>
    <button type="submit">Crear</button>
</form>
@endsection
