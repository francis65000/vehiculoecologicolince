@extends('comunes.masterBackend')

@section('title', 'Editando entrada')

@section('content')
    <!--Mostrando la tabla con las entradas que hay-->
    <h1 class="p-4">Editando entrada</h1>
    <div class="card mx-3">
        <div class="card-header d-flex align-items-center justify-content-between">

        </div>
        <div class="card-body">
            <form action="{{ url('insertar-entrada') }}" method="POST">
                @csrf
                <!--SELECCTOR DE IMAGEN-->
                <li class="menu-item active open">
                    <a href="#" class="btn btn-primary" onclick="mostrarOcultarUbicaciones()">
                        <i class="menu-icon fa-solid fa-image"></i>
                        <div data-i18n="Dashboards">Seleccionar Imágen</div>

                    </a>
                    <p id="informacion"></p>
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
                                                    onclick="mostrarOcultarUbicaciones()">
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
                        <div class="col-md-10">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <label for="fecha_publicacion">Fecha de publicación:</label>
                            <input type="date" name="fecha_publicacion" id="fecha_publicacion" class="form-control">
                            <input type="hidden" name="estado" id="estado" value="3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control h-100"></textarea>
                        </div>
                    </div>
                </div>
                <!--BOTONES DE ENIVAR Y ELINIMAR-->
                <br>
                <div class="form-group p-4">
                    <div class="row">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-success"><i class="menu-icon fa-solid fa-floppy-disk"></i>
                                Guardar</button>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ url('/entradas') }}" class="btn btn-danger"><i
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
            mensaje = "✅ Imágen Seleccionada";
        } else {
            mensaje = "⚠️ No se ha seleccionado ninguna imágen";
        }

        //cuando la pagina haya cargado que muestre una funcion
        function imprimeMensaje() {
            mensaje = "";

            mensaje = "✅ Imágen Seleccionada";
        }


        // Mostrar el mensaje en el div
        mensajeDiv.innerHTML = mensaje;

        function mostrarOcultarUbicaciones() {
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
