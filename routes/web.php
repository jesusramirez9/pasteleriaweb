<?php

use App\Http\Controllers\CatalogoController;
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

Route::get('/', function () {
    return view('web.home');
});
Route::get('/home', function () {
    return view('web.home');
});
Route::get('/nosotros', function () {
    return view('web.nosotros');
});


Route::get('catalogo', [CatalogoController::class,'index'])->name('catalogo.index');
Route::get('catalogo/detalle/{id}',[CatalogoController::class, 'show'] )->name('catalogo.show');



Route::get('/servicios', function () {
    return view('web.servicios');
});
Route::get('/contacto', function () {
    return view('web.contacto');
})->name('linkContacto');

Route::post('/contacto', 'App\Http\Controllers\EmailController@sendFormularioContacto');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
