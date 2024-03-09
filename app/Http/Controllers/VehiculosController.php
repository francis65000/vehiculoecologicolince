<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Models\Medios;
use Carbon\Carbon;


class VehiculosController extends Controller
{

    /*///////////////////////////////////////////////////////////////////*/
    /*/////////////////////// FUNCIONES FRONT   ////////////////////////*/
    /*/////////////////////////////////////////////////////////////////*/

    //VER TODOS LOS VEHICULOS EN LA PAGINA PRINCIPAL
    public function verVehiculos(Request $request)
    {
        $vehiculos = Vehiculos::all();
        $medios = Medios::all();
        return view('front.inicio', compact('vehiculos','medios'));
    }

    /*///////////////////////////////////////////////////////////////////*/
    /*/////////////////////// FUNCIONES BACKEND ////////////////////////*/
    /*/////////////////////////////////////////////////////////////////*/

    //VER TODOS LOS VEHICULOS EN EL BACKEND
    public function backendVerVehiculos(Request $request)
    {
        $vehiculos = Vehiculos::all();
        return view('backend.vehicles', compact('vehiculos'));
    }

    //VISTA PARA AÑADIR UN NUEVO VEHICULO
    public function newVehiculo(Request $request)
    {
        $medios = Medios::all();
        return view('backend.nuevoVehiculo', compact('medios'));
    }

    //METODO POST PARA AÑADIR UN NUEVO VEHICULO
    public function addNewVehiculo (Request $request)
    {
        //comprobar que los campos no estén vacíos
        /*$request->validate([
            'nombreVehiculo' => 'required',
            'descripcion' => 'required',
            'motor' => 'required',
            'alimentacionCombustible' => 'required',
            'arranque' => 'required',
            'masa' => 'required',
            'longitud' => 'required',
            'anchura' => 'required',
            'distanciaEntreRuedas' => 'required',
            'alturaDesdeSuelo' => 'required',
            'distranciaEntreEjes' => 'required',
            'estructura' => 'required',
            'carroceria' => 'required',
            'superficiesTransparentes' => 'required',
            'transmision' => 'required',
            'neumaticos' => 'required',
            'presionNeumaticos' => 'required',
            'ruedas' => 'required',
            'frenos' => 'required',
            'id_imagen' => 'required',
            'created_at' => 'required',

        ]);*/
        //obtener la fecha actual
        $fechaActual = Carbon::now();

        //crear un nuevo vehiculo
        $vehiculo = new Vehiculos();
        $vehiculo->nombreVehiculo = $request->nombreVehiculo;
        $vehiculo->descripcion = $request->descripcion;
        $vehiculo->motor = $request->motor;
        $vehiculo->alimentacionCombustible = $request->alimentacionCombustible;
        $vehiculo->arranque = $request->arranque;
        $vehiculo->masa = $request->masa;
        $vehiculo->longitud = $request->longitud;
        $vehiculo->anchura = $request->anchura;
        $vehiculo->distanciaEntreRuedas = $request->distanciaEntreRuedas;
        $vehiculo->alturaDesdeSuelo = $request->alturaDesdeSuelo;
        $vehiculo->distranciaEntreEjes = $request->distranciaEntreEjes;
        $vehiculo->estructura = $request->estructura;
        $vehiculo->carroceria = $request->carroceria;
        $vehiculo->superficiesTransparentes = $request->superficiesTransparentes;
        $vehiculo->transmision = $request->transmision;
        $vehiculo->neumaticos = $request->neumaticos;
        $vehiculo->presionNeumaticos = $request->presionNeumaticos;
        $vehiculo->ruedas = $request->ruedas;
        $vehiculo->frenos = $request->frenos;
        $vehiculo->id_imagen = $request->id_imagen;
        $vehiculo->created_at = $fechaActual->toDateString();
        $vehiculo->save();

        //redirigir a la página de vehiculos
        return redirect('entradas-vehiculos')->with('success', '¡Datos guardados correctamente!');
    }
}
