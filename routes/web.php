<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/siswa/{kelas}/{nim}', function ($kelas, $nim) {
    if ($kelas === 'IF3A' && $nim === '231420051') {
        $nama = "Depo Sadrila Hadi";
        return "NIM : $nim<br>Nama : $nama";
    } else {
        return "Data tidak ditemukan.";
    }
});

Route::get('/hello/{nama}', function($nama){
    return "hello ".$nama;
});

Route::get('/biodata/{nim}', function ($nim) {
    if ($nim === '231420051') {
        $nama = "Depo Sadrila Hadi";
        return "NIM : $nim<br>Nama : $nama";
    } else {
        return "Data tidak ditemukan.";
    }
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
