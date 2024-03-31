<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\LoginController;

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login/signup', [LoginController::class, 'signup']);

Route::middleware(['auth'])->group(function(){
    Route::get('/backend/index', [BackendController::class, 'index'])->name('admin_index');
});



