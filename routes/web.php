<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, "welcome"])->name("welcome");

//VISUALIZZAZIONE DELLE ATTIVITA'
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

//PAGINA PER CREARE L'ATTIVITA'
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create')->middleware('auth');

//SALVATAGGIO DELLE ATTIVITA'
Route::post('tasks/store', [TaskController::class, "store"])->name("tasks.store");

//STATO DELL'ATTIVITA'
Route::put('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');




