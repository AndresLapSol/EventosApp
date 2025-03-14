<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Models\Evento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;



class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('eventos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    /** @var \App\Models\User $user */
    $user = Auth::user();

    // Si el usuario ya tiene 5 o más eventos creados
    if ($user && $user->eventos()->count() >= 5) {
        return response("<h1>Se han terminado el número máximo de creaciones por usuario, póngase en contacto con el administrador de la aplicación</h1>", 200)
               ->header('Content-Type', 'text/html');
    }

    // Si no ha alcanzado el límite, mostrar el formulario de creación
    return view('eventos.create');
    }

    public function agregar(Request $datosRecibidos){
        $evento = new Evento();

        $evento->nombreEvento = $datosRecibidos->nombreEvento;
        $evento->fechaInicio = $datosRecibidos->fechaInicio;
        $evento->fechaFin = $datosRecibidos->fechaFin;
        $evento->tipo= $datosRecibidos->tipo;
        $evento->participantes = $datosRecibidos->participantes;
        $evento->descripcion = $datosRecibidos->descripcion;
        $evento->user_id = Auth::id(); // Aquí se asigna el ID del usuario autenticado
        $evento->save();

        return redirect()->route('eventos.index');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $eventos = Evento::orderBy('nombreEvento','asc')->paginate(10);
        return view('eventos.show',['lista_de_eventos' => $eventos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        return view('eventos.update', ['evento' => $evento]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Evento $evento)
    {
        return view('eventos.update', ['evento' => $evento]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.show');
    }

    public function actualizar(Evento $evento, Request $datosRecibidos){
        $evento->nombreEvento = $datosRecibidos->nombreEvento;
        $evento->fechaInicio = $datosRecibidos->fechaInicio;
        $evento->fechaFin = $datosRecibidos->fechaFin;
        $evento->tipo= $datosRecibidos->tipo;
        $evento->participantes = $datosRecibidos->participantes;
        $evento->descripcion = $datosRecibidos->descripcion;
        $evento->save();
    
        return redirect()->route('eventos.show');
    } 

    public function detalle($numEvento)
{
    $evento = Evento::findOrFail($numEvento);
    return view('eventos.detalle', compact('evento'));
}


}
