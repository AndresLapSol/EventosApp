@extends('templates.plantilla')
@section('titulo')
    Crear Evento
@endsection

@section('contenido')
    <h1>Crear Evento</h1>
    <form action="{{route('eventos.store')}}" method="POST">
        @csrf
        <label>Nombre del Evento</label><br>
        <input type="text" name="nombreEvento" required><br>
        
        <label>Fecha de Inicio</label><br>
        <input type="date" name="fechaInicio" required><br>
        
        <label>Fecha de Fin</label><br>
        <input type="date" name="fechaFin" required><br>
        
        <label>Tipo</label><br>
        <input type="text" name="tipo" required><br>
        
        <label>Participantes</label><br>
        <input type="number" name="participantes" required><br>
        
        <label>Descripción</label><br>
        <textarea name="descripcion" required></textarea><br>
        
        <button type="submit">Agregar Evento</button>
    </form>

@endsection