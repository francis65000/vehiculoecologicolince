<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Medios;

class BlogController extends Controller
{
    //VER TODOS LOS POSTS DEL BLOG EN EL BACKEND
    public function backendVerPosts(Request $request)
    {
        $entradas = Blog::orderBy('fecha_publicacion', 'desc')->get();//ordenadas por fecha de publicación
        return view('backend.blog', compact('entradas'));

    }
    //VISTA PARA AÑADIR UNA NUEVA ENTRADA DE BLOG
    public function newEntrada(Request $request)
    {
        $medios = Medios::all();

        return view('backend.nuevoBlog', compact('medios'));
    }
    //METODO POST PARA AÑADIR UNA NUEVA ENTRADA DE BLOG
    public function addNewPost(Request $request){
        //comprobar que los campos no estén vacíos
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'id_imagen' => 'required',
            'fecha_publicacion' => 'required'
        ]);

        //crear una nueva entrada
        $entrada=new Blog();
        $entrada->titulo=$request->titulo;
        $entrada->descripcion=$request->descripcion;
        $entrada->id_imagen=$request->id_imagen;
        $entrada->fecha_publicacion=$request->fecha_publicacion;
        $entrada->save();

        //redirigir a la página de entradas
        return redirect('entradas')->with('success', '¡Datos guardados correctamente!');
    }

    //VISTA PARA EDITAR UNA ENTRADA DE BLOG
    public function editMedio(Request $request, $id)
    {
        $medios = Medios::all();
        $entrada = Blog::find($id);
        return view('backend.editBlog', compact('medios', 'entrada'));
    }
}
