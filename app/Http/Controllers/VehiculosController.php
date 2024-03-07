<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Models\Medios;



class VehiculosController extends Controller
{

    //VER TODOS LOS VEHICULOS EN LA PAGINA PRINCIPAL
    public function verVehiculos(Request $request)
    {
        $vehiculos = Vehiculos::all();
        $medios = Medios::all();
        return view('front.inicio', compact('vehiculos','medios'));
    }
    public function edit()
    {
        //
    }
    public function update()
    {
        //
    }
    public function delete()
    {
        //
    }
}
