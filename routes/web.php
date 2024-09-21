<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\AvaliadorController;
use App\Http\Controllers\OrientadorController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\QuesitoAvaliativoController;
use App\Http\Controllers\AvaliacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('projetos', ProjetoController::class);

Route::resource('avaliadores', AvaliadorController::class);

Route::resource('orientadores', OrientadorController::class);

Route::resource('areas', AreaController::class);

Route::resource('escolas', EscolaController::class);

Route::resource('quesitos-avaliativos', QuesitoAvaliativoController::class);

Route::resource('avaliacoes', AvaliacaoController::class);

