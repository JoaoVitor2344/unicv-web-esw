<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/novo', [UsuariosController::class, 'create']);
Route::post('usuarios/salvar', [UsuariosController::class, 'store']);
Route::get('usuarios/editar/{id}', [UsuariosController::class, 'edit']);
Route::get('usuarios/excluir/{id}', [UsuariosController::class, 'destroy']);
Route::post('usuarios/gravar/{id}', [UsuariosController::class, 'update']);
Route::get('usuarios/{id}', [UsuariosController::class, 'show']);


Route::get('home', [HomeController::class, 'index']);
Route::get('users', [HomeController::class, 'users']);

Route::get('/', function () {
    return view('welcome');
});