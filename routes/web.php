<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Login_CDC_Controller;
use App\Http\Controllers\Login_Perusahaan_Controller;
use App\Http\Controllers\Login_Mhs_Controller;
use App\Http\Controllers\Login_Dosen_Controller;
use App\Http\Controllers\Register_Dosen_Controller;
use App\Http\Controllers\Register_Mhs_Controller;
use App\Http\Controllers\Register_Perusahaan_Controller;



Route::get('/', [DashboardController::class, 'index']);


Route::middleware(['guest'])->group(function () {
    Route::get('/login_cdc', [Login_CDC_Controller::class, 'index'])->name('login_cdc');
    Route::get('/login_perusahaan', [Login_Perusahaan_Controller::class, 'index'])->name('login_perusahaan');
    Route::get('/login_mhs', [Login_Mhs_Controller::class, 'index'])->name('login_mhs');
    Route::get('/login_dosen', [Login_Dosen_Controller::class, 'index'])->name('login_dosen');

    Route::get('/register_dosen', [Register_Dosen_Controller::class, 'index'])->name('register_dosen');
    Route::get('/register_mhs', [Register_Mhs_Controller::class, 'index'])->name('register_mhs');
    Route::get('/register_perusahaan', [Register_Perusahaan_Controller::class, 'index'])->name('register_perusahaan');
});
