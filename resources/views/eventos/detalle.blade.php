@extends('templates.plantilla')

@section('titulo')
    Detalle del Evento
@endsection

@section('contenido')
    <h1>Detalle del Evento: {{ $evento->nombreEvento }}</h1>
    <table style="border-collapse: collapse; width: 100%;">
        <tr>
            <th style="text-align: left; padding: 8px;">Nombre</th>
            <td style="padding: 8px;">{{ $evento->nombreEvento }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Fecha de Inicio</th>
            <td style="padding: 8px;">{{ $evento->fechaInicio }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Fecha de Fin</th>
            <td style="padding: 8px;">{{ $evento->fechaFin }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Tipo</th>
            <td style="padding: 8px;">{{ $evento->tipo }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Participantes</th>
            <td style="padding: 8px;">{{ $evento->participantes }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Descripción</th>
            <td style="padding: 8px;">{{ $evento->descripcion }}</td>
        </tr>
    </table>
@endsection
