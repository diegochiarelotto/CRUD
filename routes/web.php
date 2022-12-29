<?php

use App\Http\Controllers\UserController;
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

Route::delete('/usuarios/{id}',[UserController::class, 'destroy'])->name('users.destroy');
Route::put('/usuarios/{id}',[UserController::class, 'update'])->name('users.update');
Route::get('/usuarios/{id}/editar',[UserController::class, 'edit'])->name('users.edit');
Route::get('/usuarios',[UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/adicionar',[UserController::class, 'create'])->name('users.create');
Route::post('/usuarios',[UserController::class, 'store'])->name('users.store');
Route::get('/usuarios/{id}',[UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('index');
});




