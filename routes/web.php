<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas para trabalhar  com Serviços
Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');

Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');

Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');

Route::put('/servicos/{servico}', [ServicoController:: class, 'update'])->name('servicos.update');

Route::delete('/servicos/{servico}/delete', [ServicoController:: class, 'delete'])->name('servicos.delete');