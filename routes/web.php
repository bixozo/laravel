<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProdutosController;

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

Route::get('/', HomeController::class);

Route::get('produtos', [HomeProdutosController::class, 'index']);

Route::get('produtos/inserir', [HomeProdutosController::class, 'create']);

Route::get('produtos/{nome?}/{valor?}', [HomeProdutosController::class, 'show']);

Route::get('usuarios', function () {

    return "pagina do usuario";
});