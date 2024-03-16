<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Models\Medios;
use App\Models\Pilotos;
use App\Models\Equipo;
use App\Models\Patrocinadores;

class FrontController extends Controller
{
    //PÁGINA DE INICIO
    public function verHome(Request $request)
    {
        //PASAMOS LOS DATOS A LA VISTA
        $vehiculos = Vehiculos::all();
        $equios = Equipo::all();
        $ultimoEquipo = Equipo::latest()->first();
        $pilotos = Pilotos::latest()->take(4)->get();
        $patrocinadores = Patrocinadores::all();
        $medios = Medios::all();

        return view('front.inicio', compact('vehiculos','medios','pilotos','equios','patrocinadores', 'ultimoEquipo'));
    }


}
