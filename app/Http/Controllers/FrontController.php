<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Models\Medios;
use App\Models\Pilotos;
use App\Models\Equipo;
use App\Models\Patrocinadores;
use App\Models\Blog;
use App\Models\Dorsales;

use Carbon\Carbon;

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

        return view('front.inicio', compact('vehiculos', 'medios', 'pilotos', 'equios', 'patrocinadores', 'ultimoEquipo'));
    }

    //PÁGINA DE VEHÍCULOS
    public function verVehiculos(Request $request)
    {
        //PASAMOS LOS DATOS A LA VISTA
        $vehiculos = Vehiculos::all();
        $medios = Medios::all();
        return view('front.vehiculos', compact('vehiculos', 'medios'));
    }

    //PÁGINA DE BLOG
    public function verBlog(Request $request)
    {
        //PASAMOS LOS DATOS A LA VISTA
        $fecha_actual = Carbon::now();
        $blogs = Blog::whereDate('fecha_publicacion', '<=', $fecha_actual)
            ->orderByDesc('fecha_publicacion')
            ->paginate(10);
        $medios = Medios::all();
        $totalBlogs = Blog::count();
        return view('front.blog', compact('medios', 'blogs', 'totalBlogs'));
    }

    //VER UNA ENTRADA DE BLOG
    public function verPost(Request $request, $id)
    {
        //PASAMOS LOS DATOS A LA VISTA
        $medios = Medios::all();
        $blog = Blog::find($id);
        return view('front.post', compact('medios', 'blog'));
    }

    //PÁGINA DE SOBRE NOSOTROS
    public function verConocenos(Request $request)
    {
        //PASAMOS LOS DATOS A LA VISTA
        // Obtener el último equipo
        $ultimoEquipo = Equipo::latest()->first();

        // Obtener el último piloto
        $ultimoPiloto = Pilotos::latest()->first();

        // Obtener la última dorsal registrada
        $ultimaDorsal = Dorsales::latest()->first();

        // Obtener la última dorsal registrada
        $ultimoVehiculo = Vehiculos::latest()->first();

        // Pasar los datos a la vista
        $medios = Medios::all();
        return view('front.sobreNosotros', compact('medios', 'ultimoEquipo', 'ultimoPiloto', 'ultimaDorsal', 'ultimoVehiculo'));
    }
}
