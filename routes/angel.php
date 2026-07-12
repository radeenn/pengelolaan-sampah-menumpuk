<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\PengelolaanPenukaranProdukController;
use App\Http\Controllers\Admin\PengelolaanProdukPemilahController;
use App\Http\Controllers\Admin\PengelolaanSampahController;
use App\Http\Controllers\Penukaran\KonversiPoinController;
use App\Http\Controllers\Penukaran\ProdukController;
use App\Http\Controllers\Penukaran\SampahController;
use Illuminate\Support\Facades\Route;

Route::get('/penukaran-sampah', [SampahController::class, 'index'])->name('penukaran-sampah');
Route::post('/penukaran-sampah', [SampahController::class, 'store'])->middleware('auth');

Route::get('/penukaran-produk', [ProdukController::class, 'index'])->name('penukaran-produk');
Route::get('/penukaran-produk/search', [ProdukController::class, 'search'])->name('penukaran-produk.search');
Route::get('/penukaran-produk/{slug}', [ProdukController::class, 'detail']);
Route::post('/penukaran-produk/{slug}', [ProdukController::class, 'store'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/konversi-poin', [KonversiPoinController::class, 'index'])->name('konversi-poin');
    Route::post('/konversi-poin', [KonversiPoinController::class, 'store']);
    Route::get('/konversi-poin/success/{id}', [KonversiPoinController::class, 'success']);
});

Route::prefix('admin')->middleware(['auth', 'ensureRole:admin'])->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('data-produk-pemilahan', [PengelolaanProdukPemilahController::class, 'index'])->name('admin.data-produk-pemilahan');
    Route::get('data-produk-pemilahan/create', [PengelolaanProdukPemilahController::class, 'create']);
    Route::post('data-produk-pemilahan/create', [PengelolaanProdukPemilahController::class, 'store']);
    Route::get('data-produk-pemilahan/detail/{id}', [PengelolaanProdukPemilahController::class, 'detail']);
    Route::post('data-produk-pemilahan/detail/{id}', [PengelolaanProdukPemilahController::class, 'update']);
    Route::post('data-produk-pemilahan/delete/{id}', [PengelolaanProdukPemilahController::class, 'delete']);

    Route::get('data-penukaran-sampah', [PengelolaanSampahController::class, 'index'])->name('admin.data-penukaran-sampah');
    Route::get('data-penukaran-sampah/detail/{id}', [PengelolaanSampahController::class, 'detail']);
    Route::post('data-penukaran-sampah/detail/{id}', [PengelolaanSampahController::class, 'update']);
    Route::post('data-penukaran-sampah/delete/{id}', [PengelolaanSampahController::class, 'delete']);

    Route::get('data-penukaran-produk', [PengelolaanPenukaranProdukController::class, 'index'])->name('admin.data-penukaran-produk');
    Route::get('data-penukaran-produk/detail/{id}', [PengelolaanPenukaranProdukController::class, 'detail']);
    Route::post('data-penukaran-produk/detail/{id}', [PengelolaanPenukaranProdukController::class, 'update']);
    Route::post('data-penukaran-produk/delete/{id}', [PengelolaanPenukaranProdukController::class, 'delete']);
});
