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
    Route::get('/miperfil', [App\Http\Controllers\StudentController::class, 'miperfil']);
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

Route::get('/legal', [App\Http\Controllers\BusinessController::class, 'legal']);
Route::get('/privacidad', [App\Http\Controllers\BusinessController::class, 'privacidad']);

Auth::routes();
