<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\OfertasController::class, 'index']);
    Route::post('/{id}/enrol/{oferta}', [App\Http\Controllers\StudentController::class, 'enrol']);
    Route::get('/ofertas/{user}', [App\Http\Controllers\StudentController::class, 'showO']);
    Route::get('/miperfil/{user}', [App\Http\Controllers\StudentController::class, 'miperfil']);
    Route::get('/ajustes', [App\Http\Controllers\StudentController::class, 'ajustes']);

    // Route::get('/mensajes', function () {
    //     return view('mensajes');
    // });


    // -------------------------       Ajustes     ------------------------
    Route::get('/chemail', [App\Http\Controllers\StudentController::class, 'editmail']);
    Route::post('/chemail/update', [App\Http\Controllers\StudentController::class, 'chmail']);
    Route::get('/pssw', [App\Http\Controllers\StudentController::class, 'editpass']);
    Route::post('/pssw/update', [App\Http\Controllers\StudentController::class, 'chpass']);
    Route::get('/direccion', [App\Http\Controllers\StudentController::class, 'editdireccion']);
    Route::post('/direccion/update', [App\Http\Controllers\StudentController::class, 'chdireccion']);
    Route::get('/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete']);


// -----------------------    Mi Perfil   -----------------------------
Route::get('/experiencia', [App\Http\Controllers\StudentController::class, 'experiencia']);
Route::post('/experiencia/update', [App\Http\Controllers\StudentController::class, 'upExperiencia']);
Route::get('/estudio', [App\Http\Controllers\StudentController::class, 'estudio']);
Route::post('/estudio/update/', [App\Http\Controllers\StudentController::class, 'upEstudio']);
Route::get('/idioma', [App\Http\Controllers\StudentController::class, 'idioma']);
Route::post('/idioma/update/', [App\Http\Controllers\StudentController::class, 'upIdioma']);
Route::get('/datos', [App\Http\Controllers\StudentController::class, 'datos']);
Route::post('/datos/update/', [App\Http\Controllers\StudentController::class, 'upDatos']);


// -----------------------  Footer  ------------------------
Route::get('/legal', [App\Http\Controllers\BusinessController::class, 'legal']);
Route::get('/privacidad', [App\Http\Controllers\BusinessController::class, 'privacidad']);
Route::get('/ayuda', [App\Http\Controllers\BusinessController::class, 'ayuda']);

});

//Inicio de sesión y registros ----------------------------

Route::get('/registrar', function () {
    return view('registrar');
});
Route::post('registerstudent', [App\Http\Controllers\StudentController::class, 'store'])->name('registerStudent');


Route::get('/registerbusiness', function () {
    return view('registrarempresa');
});

Route::post('/registerbusiness/store', [App\Http\Controllers\BusinessController::class, 'store']);

//---------------------------------------------------------

Route::get('/form', [App\Http\Controllers\OfertasController::class, 'create']);
Route::post('/form/store', [App\Http\Controllers\OfertasController::class, 'store']);

Route::get('/ofertasE/{user}', [App\Http\Controllers\BusinessController::class, 'show']);
Route::get('/ofertasE/deloferta/{id}', [App\Http\Controllers\BusinessController::class, 'destroy']);

Route::get('/candidatos/{id}', [App\Http\Controllers\BusinessController::class, 'candidatosL']);
Route::get('/perfil/{user}', [App\Http\Controllers\BusinessController::class, 'perfil']);

Route::get('/modE/{id}', [App\Http\Controllers\StudentController::class, 'modE']);
Route::post('/modexp/{id}', [App\Http\Controllers\StudentController::class, 'modificarExp']);

Route::get('/modEst/{id}', [App\Http\Controllers\StudentController::class, 'modEst']);
Route::post('/modfest/{id}', [App\Http\Controllers\StudentController::class, 'modificarEst']);

Route::get('/modI/{id}', [App\Http\Controllers\StudentController::class, 'modI']);
Route::post('/modi/{id}', [App\Http\Controllers\StudentController::class, 'modificarI']);

Auth::routes();