@extends('templates.plantilla')
@section('titulo')
    Editar Evento
@endsection

@section('contenido')
<h1>Editar Evento</h1>
@auth
<form action="{{route('eventos.actualizar', $evento)}}" method="POST">
    @csrf
    @method('put')

    <label>Nomber del Event</label><br>
    <input type="text" name="nombreEvento" value="{{$evento->nombreEvento}}" required><br>
    <label>Fecha de Inicio</label><br>
    <input type="date" name="fechaInicio" value="{{$evento->fechaInicio}}" required><br>
    <label>Fecha de Fin</label><br>
    <input type="date" name="fechaFin" value="{{$evento->fechaFin}}" required><br>
    <label>Tipo</label><br>
    <select name="tipo" value="{{$evento->tipo}}" required>
        <option value="reunion">Reunion</option>
        <option value="conferencia">Conferencia</option>
        <option value="taller">Taller</option>
        <option value="presentación">Presentación</option>
        <option value="concierto">Concierto</option>
    </select><br>
    <label>Participante</label><br>
    <input type="number" name="participantes" value="{{$evento->participantes}}" required> <br>
    <label>Descripción</label><br>
    <textarea name="descripcion" required>{{$evento->descripcion}}</textarea> <br>
    <br><br>
    <button type="submit">Editar evento</button>
</form>
@else
    <p>Para editar un evento, por favor inicie sesión</p>
@endauth
    
@endsection