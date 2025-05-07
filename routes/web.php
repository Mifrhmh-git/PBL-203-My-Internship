<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Login_CDC_Controller;

Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login_cdc', [Login_CDC_Controller::class, 'index'])->name('login_cdc');
});
