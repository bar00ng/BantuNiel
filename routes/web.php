<?php

use App\Models\Lokasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LokasiController;

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

Route::get('/', [AdminController::class, 'index'])->name('dashboard');
Route::get('/exportexcel', [AdminController::class, 'adminexport']);
Route::post('/importexcel', [AdminController::class, 'adminimport']);

Route::get('/kalkulasi', function () {
    return view('admin.kalkulasi');
});

Route::get('/mini_olt', function () {
    return view('admin.mini_olt');
});


// LOKASI CONTROLLER ====================================================================================================

// Import excel 111 Lokasi
Route::post('/importlokasi', [LokasiController::class, 'lokasiimport']);
// Import Data
Route::post('/import_track', [LokasiController::class, 'lokasi_track']);
// Tracking
Route::get('/tracking', [LokasiController::class, 'index_t']);
// Data Table Maps Tracking
Route::get('/data_tracking', [LokasiController::class, 'data_tracking'])->name('data_tracking');

// EDIT CONTROLLER ====================================================================================================

// Tampilan edit data Data Tabel Track
Route::get('/edit_data_track/{id}', [EditController::class, 'edit_data_track'])->name('edit_data_track');
// Proses Edit Data Track
// Route::put('/update_data_track/{id}', [EditController::class, 'update_data_track'])->name('update_data_track');
// Tampilan edit data
Route::get('/edit_lokasi/{id}', [EditController::class, 'edit_lokasi'])->name('edit_lokasi');
// Proses edit
Route::put('/update_lokasi/{id}', [EditController::class, 'update_lokasi'])->name('update_lokasi');