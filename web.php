<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
//especificamos que vamos a utilizar este controlador
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use App\Mail\ContactanosMailable;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| se encargan de manejar el flujo de solicitudes y respuestas, desde y hacia el cliente
|
|
|
*/
//routes/api.php: En este archivo se definen todas las rutas de las APIs que puede llegar a tener nuestra aplicación.
//routes/channels.php: Aquí definimos los canales transmisión de eventos. Por ejemplo, cuando realizamos notificaciones en tiempo real.
//routes/console.php: En el archivo de rutas console.php definimos comandos de consola que pueden interactuar con el usuario u otro sistema.
//routes/web.php: En este archivo de rutas es donde definimos todas las rutas de nuestra aplicación web que pueden ser ingresadas por la barra de direcciones del navegador.

//FROM CONTROLER. Se encarga de administrar las rutas, laravel se encarga de verificar que la URL se a definido

//se uso el metodo class
Route::get('/', HomeController::class)->name('home');

Route::get('cursos', [CursosController::class,'index'])->name('cursos.index');

Route::post('cursos', [CursosController::class,'store'])->name('cursos.store');

Route::get('cursos/{id}', [CursosController::class, 'show'])->name('cursos.show');

Route::get('cursos/create', [CursosController::class, 'create'])->name('cursos.create');

Route::get('cursos/{curso}/edit', [CursosController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursosController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursosController::class, 'destroy'])->name('cursos.destroy'); 

//Route::resource('cursos', CursosController::class);
//->names('cursos')->parameters(['pogos' => 'cursos']);
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', ContactanosController::class, 'index')->name('contactanos.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
