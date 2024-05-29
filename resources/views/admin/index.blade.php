@extends('layouts.app')

@section('content')
<h1>Panel de Administración</h1>
<a href="{{ route('news.create') }}">Crear nueva noticia</a>
<ul>
    @foreach($news as $item)
    <li>
        <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
        <a href="{{ route('news.edit', $item->id) }}">Editar</a>
        <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection
