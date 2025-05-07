<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Login_CDC_Controller;
use App\Http\Controllers\Login_Perusahaan_Controller;
use App\Http\Controllers\Login_Mhs_Controller;
use App\Http\Controllers\Login_Dosen_Controller;


Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login_cdc', [Login_CDC_Controller::class, 'index'])->name('login_cdc');
    Route::get('/login_perusahaan', [Login_Perusahaan_Controller::class, 'index'])->name('login_perusahaan');
    Route::get('/login_mhs', [Login_Mhs_Controller::class, 'index'])->name('login_mhs');
    Route::get('/login_dosen', [Login_Dosen_Controller::class, 'index'])->name('login_dosen');
});
