@extends('comunes.masterBackend')

@section('title', 'Escritorio LinceOS')

@section('content')
    <style>
        /*FONDO ESCRITORIO BACKEND*/
        .fondo_escritorio {
            /*INSERTAR IMAGEN DE FONDO*/
            position: relative;
            background-image: url('{{ asset('assets/img/header_backend.jpg') }}');
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .fondo_escritorio::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            /* Color semi-transparente negro */
        }

        .fondo_escritorio .card-body {
            position: relative;
            /* Asegura que el contenido se posicione correctamente */
            /* Asegura que el contenido esté por encima de la superposición */
        }

        .custom-h2 {
            padding: 3% 2%;
            font-weight: 900;
            font-size: 70px;
            /* Aplica negrita */
            text-shadow: 2px 4px 4px rgba(0, 0, 0, 0.8);
            /* Aplica sombra */
        }
    </style>
    <div class="container mt-4">
        <div class="card fondo_escritorio">
            <div class="card-body text-center">
                <h1 class="text-white custom-h2">Escritorio LinceOS</h1>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <!--COLUMNA 1-->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2>Últimas Entradas</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ultimas_entradas as $entrada)
                                    <tr>
                                        <td>{{ $entrada->id }}</td>
                                        <td>{{ $entrada->titulo }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('entradas') }}" class="btn btn-primary mt-3">Ver todas las entradas</a>
                    </div>
                </div>
            </div>
            <!--COLUMNA 2-->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2>Últimos Equipos</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Año</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ultimos_equipos as $entrada)
                                    <tr>
                                        <td>{{ $entrada->anio }}</td>
                                        <td>{{ $entrada->nombre }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('entradas-equipos') }}" class="btn btn-primary mt-3">Ver todos los equipos</a>
                    </div>
                </div>
            </div>
            <!--COLUMNA 3 CONTADOR-->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2>Próxima Competición</h2>
                        @foreach ($contadores as $contador)
                            <h3 class="text-center">Shell Eco-Marathon {{ $contador->anio_competicion }}</h3>
                        @endforeach
                        <!--CAJA DEL CONTADOR-->
                        <div class="btn-primary h2 text-white p-3 rounded mx-5 text-center" id="countdown">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--DETALLES DE LA VERSIÓN-->
        <div class="row mt-4">
            <div class="col-md-6">
                <p>@include('comunes.version')</p>
            </div>
            <div class="col-md-6">
                <p style="text-align: right;">Creada y diseñada por: Francisco Manuel Gutiérrez Carmona</p> <!-- Estilo en línea para alinear a la derecha -->
            </div>
        </div>
    </div>
    <script>
        function updateCountdown(counter) {
            let now = new Date().getTime();
            let distance = counter - now;
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(interval);
                document.getElementById("countdown").innerHTML = "The time is now!";
                // Puedes agregar aquí acciones adicionales cuando la fecha límite expire
            }
        }

        let counter = new Date("{{ $contador->counter }}").getTime();
        let interval = setInterval(function() {
            updateCountdown(counter);
        }, 1000);
    </script>
@endsection
