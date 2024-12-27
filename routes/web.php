<?php

use App\Http\Controllers\CatatanPerController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    if (!session()->has('user')) {
        return redirect('/login');
    }
    return view('Cp/home');
});

Route::get('/login', [CatatanPerController::class ,'tampilog']);
Route::post('/login', [CatatanPerController::class, 'login']);

Route::get('/register', [CatatanPerController::class, 'tampilreg']);
Route::post('/register', [CatatanPerController::class, 'aksiDariRegister']);

Route::get('/logout', [CatatanPerController::class, 'logout']);

Route::get('/isi', [CatatanPerController::class, 'tampilisi']);
Route::post('/isi', [CatatanPerController::class, 'simpanData']);

Route::get('/edit{id}', [CatatanPerController::class, 'editIsi']);
Route::post('/edit{id}', [CatatanPerController::class, 'aksiEdit'])->name('Cp.edit');

Route::get('/catatan', [CatatanPerController::class, 'catatan']);

Route::get('/hapus{id}', [CatatanPerController::class, 'hapusData']);