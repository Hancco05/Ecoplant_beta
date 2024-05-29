@extends('layouts.app')

@section('content')
<h1>Noticias</h1>
<a href="{{ route('news.create') }}">Crear nueva noticia</a>
<ul>
    @foreach($news as $item)
    <li>
        <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
        @if(auth()->user() && auth()->user()->is_admin)
        <a href="{{ route('news.edit', $item->id) }}">Editar</a>
        <form action="{{ route('news.destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
        @endif
    </li>
    @endforeach
</ul>
@endsection
