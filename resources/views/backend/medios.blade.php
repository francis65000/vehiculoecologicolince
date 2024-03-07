@extends('comunes.masterBackend')

@section('title', 'Medios')

@section('content')
    <!--Mostrando la tabla con las entradas que hay-->
    <div class="card mx-3">
        <h1 class="p-4">Medios</h1>
        <div class="card-body">
            <form action="{{ url('addMedios') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" class="form-control" accept="image/jpeg, image/png, image/jpg, image/gif">
                <label for = "descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción">
                <button type="submit" class="btn btn-primary m-3"><i class="menu-icon fa-solid fa-plus"></i>Subir archivos</button>
            </form>

            <table class="table table-striped">
                <tbody>
                    @foreach ($medios as $index => $imagen)
                        @if ($index % 5 == 0)
                            </div><div class="row">
                        @endif
                        <div class="col-md-2">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/' . $imagen->nombre) }}" class="card-img-top"
                                    alt="{{ $imagen->nombre }}">
                                <div class="card-body text-center">
                                    <form action="{{ route('medios.delete', ['id' => $imagen->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="menu-icon fa-solid fa-xmark"></i>Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
