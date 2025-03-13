@extends('templates.plantilla')
@section('titulo')  
    Mostrar Eventos
@endsection

@section('contenido')
    <ul>
        @foreach($lista_de_eventos as $evento)
            <li>{{$evento->nombreEvento}} 
                | {{$evento->fechaInicio}} 
                | {{$evento->tipo}}
        @endforeach 
    </ul>
    {{ $lista_de_eventos->links() }}
@endsection