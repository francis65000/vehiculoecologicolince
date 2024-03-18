@extends('comunes.master')

@section('title', 'Equipos')

@section('content')
    <div class="custom-margin mx-auto pb-5">
        <h1 class="text-center">Equipos</h1>
        <!--Tarjetas-->
        <div class="row justify-content-center p-4">
            @foreach ($equipos->chunk(3) as $chunk)
                <div class="row mb-4 justify-content-center">
                    @foreach ($chunk as $equipo)
                        <div class="col-md-4" style="height: 100%;">
                            <div class="card h-100">
                                @foreach ($medios as $medio)
                                    @if ($equipo->id_imagen == $medio->id)
                                        <img src="{{ asset('assets/uploads/' . $medio->nombre) }}"
                                            class="card-img-top img-fluid" alt="{{ $medio->nombre }}"
                                            style="width: 100%; height: 400px; object-fit: cover;">
                                    @endif
                                @endforeach
                                <div class="card-body">
                                    <h2 class="card-title">{{ $equipo->nombre }}</h2>
                                    <p class="card-text">{!! $equipo->descripcion !!}</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

@endsection
