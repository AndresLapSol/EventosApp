@extends('templates.plantilla')
@section('titulo')  
    Mostrar Eventos
@endsection

@section('contenido')
    <ul>
        @foreach($lista_de_eventos as $evento)
        <li>
            <a href="{{ route('eventos.detalle', $evento->id) }}">{{ $evento->nombreEvento }}</a> | {{$evento->fechaInicio}} | {{$evento->tipo}}
            
            @auth
                | <a href="{{route('eventos.edit', $evento) }}">Editar</a>
                | 
                <form action="{{ route('eventos.eliminar', $evento->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este evento?')">Eliminar</button>
                </form>
            @else
                <p>Para editar o eliminar un evento, por favor inicie sesión</p>
            @endauth
        </li>
        @endforeach 
    </ul>
    {{ $lista_de_eventos->links() }}
@endsection