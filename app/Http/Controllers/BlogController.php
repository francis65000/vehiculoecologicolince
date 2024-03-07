<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Medios;

class BlogController extends Controller
{
    //
    public function backendVerPosts(Request $request)
    {
        $entradas = Blog::all();   
        return view('backend.blog', compact('entradas'));

    }

    public function newEntrada(Request $request)
    {
        $medios = Medios::all();

        return view('backend.newEntrada', compact('medios'));
    }
}
