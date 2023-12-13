<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CompranController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RecorreController;
use App\Http\Controllers\CircuitoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PuntuacionController;
use App\Http\Controllers\ParticipanteController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('permisos/{id}',PermisoController::class)->name('permisos');



require __DIR__.'/auth.php';

Route::resource('equipo',CategoriaController::class)->middleware(['auth']);



Route::resource('producto',CircuitoController::class)->middleware(['auth', 'verified']);

Route::resource('recorre',RecorreController::class)->middleware('auth');
Route::resource('user',UserController::class)->middleware(['auth','sudo']);


Route::get('/shop', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');

Route::post('/add', [CartController::class, 'add'])->name('cart.store');

Route::post('/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/com', [CartController::class, 'com'])->name('cart.com');

Route::resource('categoria',CategoriaController::class)->middleware(['auth']);

Route::resource('circuito',CircuitoController::class)->middleware(['auth']);

Route::resource('compran',CompranController::class)->middleware(['auth']);

Route::resource('producto',CircuitoController::class)->middleware(['auth']);



