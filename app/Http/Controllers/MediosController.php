<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Medios;
use Illuminate\Support\Facades\Storage;


class MediosController extends Controller
{
    //
    public function viewMedios()
    {

        $medios = Medios::all();

        return view('backend.medios', compact('medios'));
    }

    //Añadir medio nuevo a la biblioteca
    public function newMedio(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        $imageName = $request->file('image')->getClientOriginalName(); // Obtener el nombre del archivo

        $request->image->move(public_path('assets/uploads/'), $imageName);

        //Añadir registro a la base de datos
        $medio = new medios();
        $medio->nombre = $imageName;
        $medio->descripcion = $request->descripcion;
        $medio->save();

        return redirect('medios')->with('success', '¡Medio añadido correctamente!');
    }

    //Eliminar medio de la biblioteca
    public function deleteMedio($id)
    {
        $medio = medios::findOrFail($id);
        $imagePath = 'assets/uploads/' . $medio->nombre;

        //if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
            $medio->delete();
            return redirect('medios')->with('success', '¡Medio eliminado correctamente!');
        //} else {
        //    return redirect('medios')->with('error', 'El medio no existe en el servidor');
        //}
    }
}
