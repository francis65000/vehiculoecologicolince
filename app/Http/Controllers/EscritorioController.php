<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class EscritorioController extends Controller
{
    
    //MOSTRAR EL ESCRITORIO DEL BACKEND
    public function homeBackend(){

        $ultimas_entradas = Blog::orderBy('fecha_publicacion', 'desc')->take(3)->get();
        return view('backend.home', compact('ultimas_entradas'));
    }
}
