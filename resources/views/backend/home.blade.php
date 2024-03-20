@extends('comunes.masterBackend')

@section('title', 'Escritorio LinceOS')

@section('content')
    <h1 class="p-4">Escritorio</h1>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h2>Escritorio LinceOS</h2><p>v 1.2.4</p>
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
