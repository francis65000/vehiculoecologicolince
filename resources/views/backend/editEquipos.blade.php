@extends('comunes.masterBackend')

@section('title', 'Editar equipo')

@section('content')
    <!--Mostrando la tabla con las entradas que hay-->
    <h1 class="p-4">Editar equipo</h1>
    <div class="card mx-3">
        <div class="card-header d-flex align-items-center justify-content-between">

        </div>
        <div class="card-body">
            <form action="{{ url('edit-equipo') }}" method="POST">
                @csrf
                <!--SELECCTOR DE IMAGEN-->
                <li class="menu-item active open">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary" onclick="mostrarOcultarUbicaciones()">
                                    <i class="menu-icon fa-solid fa-image"></i>
                                    <div data-i18n="Dashboards">Seleccionar Imágen</div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="" id="informacion"></div>
                            </div>
                        </div>
                    </div>
                    <!-- AREA DE INFORMACION DE SI SE HA SELECCIONADO UNA IMAGEN -->
                    <ul class="menu-sub" id="menuUbicaciones" style="display: none;">
                        <li class="menu-item">
                            <div data-i18n="CRM">
                                <div class="row mt-4">
                                    @foreach ($medios as $index => $imagen)
                                        @if ($index % 8 == 0 && $index != 0)
                                </div>
                                <div class="row mt-4">
                                    @endif
                                    <div class="col-md-1">
                                        <div class="card">
                                            <img src="{{ asset('assets/uploads/' . $imagen->nombre) }}"
                                                class="imagenesBlog rounded" alt="{{ $imagen->nombre }}">
                                            <div class="m-2 text-center">
                                                <input type="radio" class="opciones1" name="id_imagen"
                                                    id="{{ $imagen->id }}" value="{{ $imagen->id }}" required
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
                            <label for="nombre">Nombre Equipo:</label>
                            <input type="text" name="nombre" id="titulo" class="form-control" maxlength="100" value="{{$equipo->nombre}}"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="anio">Año:</label>
                            <input type="text" name="anio" id="anio" class="form-control" value="{{$equipo->anio}}" maxlength="100"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="slug">Slug:</label>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{$equipo->slug}}" readonly>
                        </div>
                        <div class="col-md-2">
                            <div class="mt-4" id="infoSlug">
                                <div class="alert alert-success" role="alert"> <i class="fa-solid fa-check"></i> Slug generado </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" id="myeditorinstance" class="form-control" rows="5">{{$equipo->descripcion}}</textarea>
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
    <script src="{{ asset('assets/js/controllerEditVehiculos.js') }}"></script>

@endsection
