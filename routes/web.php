<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/servicos', [SiteController::class, 'servicos']);
Route::get('/servico/{id}', [SiteController::class, 'servico']);

Route::get('/saudacao/{nome?}', Saudacao::class);

/*Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/client{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');*/

//TODOS ARQUIVOS COMENTADOS ACIMA, PODERIA SER SUBSTITUIDO PELA ALINHA ABAIXO
Route::resource('clients', ClientController::class);