<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Models\Medios;



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
}
