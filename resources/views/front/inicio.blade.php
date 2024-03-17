@extends('comunes.master')

@section('title', 'Home')

@section('content')
    @include('layouts.slider')
    <div class="custom-margin mx-auto"> <!-- Agrega la clase mx-auto para centrar horizontalmente -->
        <div class="row justify-content-center">
            <div class="col-md-5"> <!-- Quita mx-2 para eliminar el margen -->
                <!-- Contenido de la primera columna -->
                <h1>Sobre Nosotros</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis ipsum sed erat tempus, et
                    faucibus tortor tincidunt. Phasellus eget eleifend enim, id faucibus risus. Maecenas consequat elit dui,
                    a tempus purus congue maximus. Vestibulum non lectus nisi. Donec euismod, tortor at fermentum sagittis,
                    tellus neque sollicitudin enim, vitae accumsan sapien turpis id sem. Vivamus vel pretium urna, efficitur
                    dapibus orci.</p>
                <h2>Shell Eco-Marathon 2024</h2>
                <div class="d-flex justify-content-left align-items-center">
                    <div class="bg-custom text-white p-3 rounded me-3">
                        <h3 class="mb-0 text-white">Faltan</h3>
                    </div>
                    <div class="bg-light p-3 rounded me-3">
                        <h3 class="mb-0 ">20</h3>
                    </div>
                    <div class="bg-custom text-white p-3 rounded">
                        <h3 class="mb-0 text-white">días</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Contenido de la segunda columna -->
                @foreach ($medios as $medio)
                    @if ($ultimoEquipo->id_imagen == $medio->id)
                        <img src="{{ asset('assets/uploads/' . $medio->nombre) }}" class="imagenes img-fluid"
                            alt="{{ $medio->nombre }}" style="max-width: 90%; height: auto;">
                    @endif
                @endforeach
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Contenido de la primera columna -->
                <h2 class="text-center">Todos nuestros vehículos</h2>
                <div class="row justify-content-center">
                    @foreach ($vehiculos as $vehiculo)
                        <div class="col-md-2 mb-4">
                            <a href="{{ url('vehiculos/' . $vehiculo->slug) }}">
                                <div class="card" style="width: auto; height: 200px;"> <!-- Cambia los valores de width y height según sea necesario -->
                                    @foreach ($medios as $medio)
                                        @if ($vehiculo->id_imagen == $medio->id)
                                            <img src="{{ asset('assets/uploads/' . $medio->nombre) }}" class="card-img-top card-img-bottom img-fluid"
                                                alt="{{ $medio->nombre }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        @endif
                                    @endforeach
                                </div>
                                <h5 class="text-center mt-2">{{ $vehiculo->nombreVehiculo }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="fondo-gris pb-4">
        <div class="custom-margin">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Contenido de la primera columna -->
                    <h2 class="text-center">Todos nuestros pilotos</h2>
                    <div class="row justify-content-center">
                        @foreach ($pilotos as $piloto)
                            <div class="col-md-2 mb-4">
                                <div class="card">
                                    @foreach ($medios as $medio)
                                        @if ($piloto->id_imagen == $medio->id)
                                            <img src="{{ asset('assets/uploads/' . $medio->nombre) }}"
                                                class="card-img-top card-img-bottom" alt="{{ $medio->nombre }}">
                                        @endif
                                    @endforeach
                                </div>
                                <h5 class="text-center">{{ $piloto->nombre }}</h5>
                            </div>
                        @endforeach
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6 mx-auto">
                            <!-- Puedes ajustar el tamaño del contenedor según tus necesidades -->
                            <a href="{{ url('pilotos') }}" class="boton-negro btn-block">Pilotos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="custom-margin">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Contenido de la primera columna -->
                    <h2 class="text-center">Patrocinadores</h2>
                    <div class="row justify-content-center"> <!-- Alineación horizontal al centro -->
                        @foreach ($patrocinadores as $patrocinador)
                            <div class="col-md-2 mb-4">
                                <div class="card">
                                    @foreach ($medios as $medio)
                                        @if ($patrocinador->id_imagen == $medio->id)
                                            <img src="{{ asset('assets/uploads/' . $medio->nombre) }}"
                                                class="card-img-top card-img-bottom" alt="{{ $medio->nombre }}">
                                        @endif
                                    @endforeach
                                </div>
                                <h5 class="text-center">{{ $patrocinador->nombre }}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
