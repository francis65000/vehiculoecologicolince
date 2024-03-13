@extends('comunes.masterBackend')

@section('title', 'Escritorio LinceOS')

@section('content')
    <h1 class="p-4">Escritorio</h1>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h2>Escritorio LinceOS 1.0</h2>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
          <!--COLUMNA 1-->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h2>Últimas entradas</h2>
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
            <div class="card">
              <div class="card-body">
                <h2>Columna 2</h2>
              </div>
            </div>
          </div>
          <!--COLUMNA 3-->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h2>Columna 3</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
