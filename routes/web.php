<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProfileController;
use App\Models\Absensi;
use App\Models\Karyawan;
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
Route::get("/",[AbsensiController::class, "home"])->name("home");


Route::get('/dashboard', function () {
    $data["absencount"] = Absensi::count();
    $data["karyawancount"] = Karyawan::count();
    return view('dashboard',$data);

})->middleware(['auth', 'verified'])->name('dashboard');

// route profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route karyawan
Route::get('karyawan', [KaryawanController::class, 'index'])->name('karyawan')->middleware("admin");
Route::get('karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create')->middleware("admin");
Route::post('karyawan', [KaryawanController::class, 'store'])->name('karyawan.store')->middleware("admin");
Route::get('karyawan/{id}', [KaryawanController::class, 'show'])->name('karyawan.show')->middleware("admin");
Route::get('karyawan/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit')->middleware("admin");
Route::patch('karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update')->middleware("admin");
Route::delete('karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy')->middleware("admin");


// route absensi
Route::get('absensi', [AbsensiController::class, 'index'])->name('absensi')->middleware("admin");
Route::get('absensi/create', [AbsensiController::class, 'create'])->name('absensi.create')->middleware("admin");
Route::post('absensi', [AbsensiController::class, 'store'])->name('absensi.store')->middleware("admin");
Route::get('absensi/{id}', [AbsensiController::class, 'show'])->name('absensi.show')->middleware("admin");
Route::get('absensi/{absensi}/edit', [AbsensiController::class, 'edit'])->name('absensi.edit')->middleware("admin");
Route::patch('absensi/{id}', [AbsensiController::class, 'update'])->name('absensi.update')->middleware("admin");
Route::delete('absensi/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy')->middleware("admin");

require __DIR__.'/auth.php';
