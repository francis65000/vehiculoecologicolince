<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Equipo;
use App\Models\Contadores;

class EscritorioController extends Controller
{
    
    //MOSTRAR EL ESCRITORIO DEL BACKEND
    public function homeBackend(){

        $ultimas_entradas = Blog::orderBy('fecha_publicacion', 'desc')->take(3)->get();
        $ultimos_equipos = Equipo::orderBy('created_at', 'desc')->take(3)->get();
        $contadores = Contadores::all();
        return view('backend.home', compact('ultimas_entradas', 'ultimos_equipos', 'contadores'));
    }
}
