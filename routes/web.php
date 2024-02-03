<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;


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
    return view('pages.dashboard');
});

//Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route admin
Route::get('/tableadmin', [Admin::class, 'index'])->name('admin');
Route::get('/admin/delete/{id}', [Admin::class, 'destroy'])->name('admin.delete');
Route::get('logpegawai', [Admin::class, 'show'])->name('logpegawai');
Route::post('/Admin/tambahData', [Admin::class, 'TambahPegawai'])->name('admin.tambahPegawai');
Route::put('/admin/edit/{id}', [Admin::class, 'update'])->name('admin.edit');
