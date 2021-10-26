<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('simple');
Route::get('/datatable', [HomeController::class, 'datatable'])->name('datatable');
Route::get('/ajax', [HomeController::class, 'ajax'])->name('ajax');


