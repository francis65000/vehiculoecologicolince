<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DorsalesController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\EscritorioController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MediosController;
use App\Http\Controllers\PatrocinadoresController;
use App\Http\Controllers\PilotosController;
use App\Http\Controllers\ReconocimientosController;
use Illuminate\Support\Facades\Route;

/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////  RUTAS DEL FRONTEND  //////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/

Route::get('/', [FrontController::class, 'verHome'])->name('front.show');

/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////  RUTAS DEL BACKEND  //////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
Route::middleware('auth')->group(function () {
    Route::get('/escritorio', [EscritorioController::class, 'homeBackend'])->name('homeBackend.show');
    /*Route::get('/escritorio', function () {
        return view('backend.home');
    });*/
    //ENTRADAS DEL BLOG
    Route::get('/entradas', [BlogController::class, 'backendVerPosts'])->name('backendBlog.show');
    Route::get('/nueva-entrada', [BlogController::class, 'newEntrada']);
    Route::post('/insertar-entrada', [BlogController::class, 'addNewPost']);
    Route::get('/editar-entrada/{id}', [BlogController::class, 'editMedio'])->name('medios.edit');
    Route::post('/actualizar-entrada/{id}', [BlogController::class, 'updateMedio'])->name('medios.update');
    Route::get('/eliminar-entrada/{id}', [BlogController::class, 'deleteMedio'])->name('entradas.delete');
    
    //MEDIOS
    Route::get('/medios', [MediosController::class, 'viewMedios'])->name('backendMedios.view');
    Route::post('/addMedios', [MediosController::class, 'newMedio']);
    Route::delete('/medios/{id}', [MediosController::class, 'deleteMedio'])->name('medios.delete');

    //VEHICULOS
    Route::get('/entradas-vehiculos', [VehiculosController::class, 'backendVerVehiculos'])->name('backendVehiculos.show');
    Route::get('/nuevo-vehiculo', [VehiculosController::class, 'newVehiculo']);
    Route::post('/insertar-vehiculo', [VehiculosController::class, 'addNewVehiculo']);
    Route::get('/editar-vehiculo/{id}', [VehiculosController::class, 'editVehiculo'])->name('vehiculos.edit');
    Route::post('/actualizar-vehiculo/{id}', [VehiculosController::class, 'updateVehiculo'])->name('vehiculos.update');
    Route::get('/eliminar-vehiculo/{id}', [VehiculosController::class, 'deleteMedio'])->name('vehiculos.delete');

    //EQUIPOS
    Route::get('/entradas-equipos', [EquiposController::class, 'backendVerEquipos'])->name('backendEquipos.show');
    Route::get('/nuevo-equipo', [EquiposController::class, 'newEquipo']);   
    Route::post('/insertar-equipo', [EquiposController::class, 'addNewEquipo']);
    Route::get('/editar-equipo/{id}', [EquiposController::class, 'editEquipo'])->name('equipos.edit');
    Route::post('/actualizar-equipo/{id}', [EquiposController::class, 'updateEquipo'])->name('equipos.update');
    Route::get('/eliminar-equipo/{id}', [EquiposController::class, 'deleteEquipo'])->name('equipos.delete');
    
    //DORSALES
    Route::get('/entradas-dorsales', [DorsalesController::class, 'backendVerDorsales'])->name('backendDorsales.show');
    Route::get('/nueva-dorsal', [DorsalesController::class, 'newDorsal']);
    Route::post('/insertar-dorsal', [DorsalesController::class, 'addNewDorsal']);
    Route::get('/editar-dorsal/{id}', [DorsalesController::class, 'editDorsal'])->name('dorsales.edit');
    Route::post('/actualizar-dorsal/{id}', [DorsalesController::class, 'updateDorsal'])->name('dorsales.update');
    Route::get('/eliminar-dorsal/{id}', [DorsalesController::class, 'deleteDorsal'])->name('dorsales.delete');

    //PATROCINADORES
    Route::get('/entradas-patrocinadores', [PatrocinadoresController::class, 'backendVerPatrocinadores'])->name('backendPatrocinadores.show');
    Route::get('/nuevo-patrocinador', [PatrocinadoresController::class, 'newPatrocinador']);
    Route::post('/insertar-patrocinador', [PatrocinadoresController::class, 'addNewPatrocinador']);
    Route::get('/editar-patrocinador/{id}', [PatrocinadoresController::class, 'editPatrocinador'])->name('patrocinadores.edit');
    Route::post('/actualizar-patrocinador/{id}', [PatrocinadoresController::class, 'updatePatrocinador'])->name('patrocinadores.update');
    Route::get('/eliminar-patrocinador/{id}', [PatrocinadoresController::class, 'deletePatrocinador'])->name('patrocinadores.delete');
    
    //PILOTOS
    Route::get('/entradas-pilotos', [PilotosController::class, 'backendVerPilotos'])->name('backendPilotos.show');
    Route::get('/nuevo-piloto', [PilotosController::class, 'newPiloto']);
    Route::post('/insertar-piloto', [PilotosController::class, 'addNewPiloto']);
    Route::get('/editar-piloto/{id}', [PilotosController::class, 'editPiloto'])->name('pilotos.edit');
    Route::post('/actualizar-piloto/{id}', [PilotosController::class, 'updatePiloto'])->name('pilotos.update');
    Route::get('/eliminar-piloto/{id}', [PilotosController::class, 'deletePiloto'])->name('pilotos.delete');
    
    //RECONOCIMIENTOS
    Route::get('/entradas-reconocimientos', [ReconocimientosController::class, 'backendVerReconocimientos'])->name('backendReconocimientos.show');
    Route::get('/nuevo-reconocimiento', [ReconocimientosController::class, 'newReconocimiento']);
    Route::post('/insertar-reconocimiento', [ReconocimientosController::class, 'addNewReconocimiento']);
    Route::get('/editar-reconocimiento/{id}', [ReconocimientosController::class, 'editReconocimiento'])->name('reconocimientos.edit');
    Route::post('/actualizar-reconocimiento/{id}', [ReconocimientosController::class, 'updateReconocimiento'])->name('reconocimientos.update');
    Route::get('/eliminar-reconocimiento/{id}', [ReconocimientosController::class, 'deleteReconocimiento'])->name('reconocimientos.delete');

    //CONFIGURACION
});

/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////  OTRAS RUTAS GENERADAS  //////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
Route::get('/dashboard', function () {
    return view('backend.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__ . '/auth.php';
