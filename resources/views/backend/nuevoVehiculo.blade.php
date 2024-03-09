@extends('comunes.masterBackend')

@section('title', 'Nueva Entrada')

@section('content')
    <!--Mostrando la tabla con las entradas que hay-->
    <h1 class="p-4">Añadir nuevo vehículo</h1>
    <div class="card mx-3">
        <div class="card-header d-flex align-items-center justify-content-between">

        </div>
        <div class="card-body">
            <form action="{{ url('insertar-vehiculo') }}" method="POST">
                @csrf
                <!--SELECCTOR DE IMAGEN-->
                <li class="menu-item active open">
                    <a href="#" class="btn btn-primary" onclick="mostrarOcultarUbicaciones()">
                        <i class="menu-icon fa-solid fa-image"></i>
                        <div data-i18n="Dashboards">Seleccionar Imágen</div>

                    </a>
                    <!--AREA DE INFORMACION DE SI SE HA SELECCIONADO UNA IMAGEN-->
                    <div class="col-3 mt-4" id="informacion"></div>
                    <!--FIN AREA-->
                    <ul class="menu-sub" id="menuUbicaciones" style="display: none;">
                        <!-- MENU PENDIENTE DE ENLAZAR -->
                        <li class="menu-item">
                            <div data-i18n="CRM">
                                <div class="row mt-4">
                                    @foreach ($medios as $index => $imagen)
                                        @if ($index % 8 == 0 && $index != 0)
                                </div>
                                <div class="row mt-4">
                                    @endif
                                    <div class="col-md-1"> <!-- Cambiado a col-md-1 -->
                                        <div class="card">
                                            <img src="{{ asset('assets/uploads/' . $imagen->nombre) }}"
                                                class="imagenesBlog rounded" alt="{{ $imagen->nombre }}">
                                            <div class="m-2 text-center">
                                                <input type="radio" name="id_imagen" id="{{ $imagen->id }}"
                                                    value="{{ $imagen->id }}" required
                                                    onclick="mostrarOcultarUbicacionesCheck()">
                                                {{ $imagen->nombre }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombreVehiculo">Nombre:</label>
                            <input type="text" name="nombreVehiculo" id="nombreVehiculo" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="motor">Motor:</label>
                            <input type="text" name="motor" id="motor" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="5" maxlength="100" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="alimentacionCombustible">Alimentación Combustible:</label>
                            <input type="text" name="alimentacionCombustible" id="alimentacionCombustible" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="arranque">Arranque:</label>
                            <input type="text" name="arranque" id="arranque" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="masa">Masa:</label>
                            <input type="text" name="masa" id="masa" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="longitud">Longitud:</label>
                            <input type="text" name="longitud" id="longitud" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="anchura">Anchura:</label>
                            <input type="text" name="anchura" id="anchura" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="distanciaEntreRuedas">Distancia entre ruedas:</label>
                            <input type="text" name="distanciaEntreRuedas" id="distanciaEntreRuedas" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="alturaDesdeSuelo">Altura desde el suelo:</label>
                            <input type="text" name="alturaDesdeSuelo" id="alturaDesdeSuelo" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="distranciaEntreEjes">Distancia entre ejes:</label>
                            <input type="text" name="distranciaEntreEjes" id="distranciaEntreEjes" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="estructura">Estructura:</label>
                            <input type="text" name="estructura" id="estructura" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="carroceria">Carrocería:</label>
                            <input type="text" name="carroceria" id="carroceria" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="superficiesTransparentes">Superficies Transparentes:</label>
                            <input type="text" name="superficiesTransparentes" id="superficiesTransparentes" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="transmision">Transmisión:</label>
                            <input type="text" name="transmision" id="transmision" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="neumaticos">Neumáticos:</label>
                            <input type="text" name="neumaticos" id="neumaticos" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="presionNeumaticos">Presión Neumáticos:</label>
                            <input type="text" name="presionNeumaticos" id="presionNeumaticos" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="ruedas">Ruedas:</label>
                            <input type="text" name="ruedas" id="ruedas" class="form-control" maxlength="100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="frenos">Frenos:</label>
                            <input type="text" name="frenos" id="frenos" class="form-control" maxlength="100" required>
                        </div>
                    </div>
                </div>
                <!--BOTONES DE ENIVAR Y ELINIMAR-->
                <br>
                <div class="form-group p-4">
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success"><i class="menu-icon fa-solid fa-floppy-disk"></i>
                                Guardar</button>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('/entradas-vehiculos') }}" class="btn btn-danger"><i
                                    class="menu-icon fa-solid fa-xmark"></i>
                                Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tu código JavaScript -->
    <script>
        // Obtener referencia al div donde queremos mostrar el mensaje
        let mensajeDiv = document.getElementById("informacion");

        let radioButtons = document.querySelectorAll('input[name="opciones"]');
        // Verificar si algún radio button está seleccionado
        let algunoSeleccionado = Array.from(radioButtons).some(function(radioButton) {
            return radioButton.checked;
        });

        let mensaje = "";

        // Mensaje a mostrar
        if (algunoSeleccionado) {
            mensaje =
                '<div class="alert alert-success" role="alert"> <i class="fa-solid fa-check"></i> Imágen Seleccionada </div>';
        } else {
            mensaje =
                '<div class="alert alert-danger" role="alert"> <i class="fa-solid fa-triangle-exclamation"></i> No se ha seleccionado ninguna imágen </div>';
        }

        //cuando la pagina haya cargado que muestre una funcion
        function imprimeMensaje() {
            mensaje = "";

            mensaje =
                '<div class="alert alert-success" role="alert"> <i class="fa-solid fa-check"></i> Imágen Seleccionada </div>';;
        }


        // Mostrar el mensaje en el div
        mensajeDiv.innerHTML = mensaje;

        function mostrarOcultarUbicaciones() {
            let menuUbicaciones = document.getElementById("menuUbicaciones");

            if (menuUbicaciones.style.display === "none") {
                menuUbicaciones.style.display = "block";
            } else {
                menuUbicaciones.style.display = "none";
                mensajeDiv.innerHTML = mensaje;
            }

        }

        function mostrarOcultarUbicacionesCheck() {
            let menuUbicaciones = document.getElementById("menuUbicaciones");

            if (menuUbicaciones.style.display === "none") {
                menuUbicaciones.style.display = "block";
            } else {
                menuUbicaciones.style.display = "none";
                imprimeMensaje();
                mensajeDiv.innerHTML = mensaje;
            }

        }
    </script>

@endsection
