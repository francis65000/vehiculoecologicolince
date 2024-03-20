<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contadores;

class ConfigController extends Controller
{
    //
    //CONFIGURACIÓN DEL CONTADOR
    public function contador(Request $request)
    {
        //PASAMOS LOS DATOS A LA VISTA
        $contador = Contadores::find(1);
        return view('backend.contador', compact('contador'));
    }

    //ACTUALIZAR CONTADOR
    public function updateContador(Request $request, $id)
    {
        //ACTUALIZAMOS EL CONTADOR
        $contador = Contadores::find($id);
        $contador->anio_competicion = $request->anio_competicion;
        $contador->counter = $request->counter;
        $contador->save();

        return redirect('/escritorio');
    }
}
