<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MediosController;
use Illuminate\Support\Facades\Route;

/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////  RUTAS DEL FRONTEND  //////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/

Route::get('/', [VehiculosController::class, 'verVehiculos'])->name('vehiculos.show');

/*////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////  RUTAS DEL BACKEND  //////////////////////////////*/
/*////////////////////////////////////////////////////////////////////////////////*/
Route::middleware('auth')->group(function () {
    Route::get('/escritorio', function () {
        return view('backend.home');
    });
    //ENTRADAS DEL BLOG
    Route::get('/entradas', [BlogController::class, 'backendVerPosts'])->name('backendBlog.show');
    Route::get('/nueva-entrada', [BlogController::class, 'newEntrada']);
    Route::post('/insertar-entrada', [BlogController::class, 'addNewPost']);
    Route::get('/editar-entrada/{id}', [BlogController::class, 'editMedio'])->name('medios.edit');
    
    //MEDIOS
    Route::get('/medios', [MediosController::class, 'viewMedios'])->name('backendMedios.view');
    Route::post('/addMedios', [MediosController::class, 'newMedio']);
    Route::delete('/medios/{id}', [MediosController::class, 'deleteMedio'])->name('medios.delete');
    

    //VEHICULOS

    //DORSALES

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
