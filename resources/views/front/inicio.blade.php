@extends('comunes.master')

@section('title', 'Home')

@section('content')
    @include('layouts.slider')
    <div class=" custom-margin">
        <div class="bg-warning row">
            <div class="col-md-6 mx-2">
                <!-- Contenido de la primera columna -->
                <h1>Sobre Nosotros</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis ipsum sed erat tempus, et
                    faucibus tortor tincidunt. Phasellus eget eleifend enim, id faucibus risus. Maecenas consequat elit dui,
                    a tempus purus congue maximus. Vestibulum non lectus nisi. Donec euismod, tortor at fermentum sagittis,
                    tellus neque sollicitudin enim, vitae accumsan sapien turpis id sem. Vivamus vel pretium urna, efficitur
                    dapibus orci.</p>
            </div>
            <div class="col-md-4">
                <!-- Contenido de la segunda columna -->
                <img src="{{ asset('assets/img/equipo_2014.jpg') }}" class="imagenes" alt="Responsive image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Contenido de la primera columna -->
                <h2 class="text-center">Todos nuestros vehículos</h2>
                <div class="bg-success">
                    @foreach ($vehiculos as $vehiculo)
                        <a href="{{ url('vehiculos/'.$vehiculo->id) }}">
                            <div class="card" style="width: 18rem;">
                                @foreach ($medios as $medio)
                                    @if ($vehiculo->id_imagen == $medio->id)
                                        <img src="{{ asset('assets/uploads/' . $medio->nombre) }}" class="card-img-top"
                                            alt={{ $medio->nombre }}>
                                    @endif
                                @endforeach
                                <div class="card-body">
                                    <h5 class="card-title">{{ $vehiculo->nombreVehiculo }}</h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
