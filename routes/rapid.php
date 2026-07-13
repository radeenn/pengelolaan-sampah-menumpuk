<?php

use App\Http\Controllers\Admin\PengelolaanBlogController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\User\UpdateProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/search', [BlogController::class, 'search'])->name('blog.search');
Route::get('/blog/{slug}', [BlogController::class, 'read'])->name('blog.read');

Route::prefix('user')->middleware(['auth', 'ensureRole:user'])->group(function () {
    Route::get('/', [DashboardUserController::class, 'index'])->name('user.dashboard-user');
    Route::get('penukaran-sampah/detail/{id}', [DashboardUserController::class, 'sampah']);
    Route::get('penukaran-produk/detail/{id}', [DashboardUserController::class, 'produk']);
    Route::post('penukaran-produk/detail/{id}', [DashboardUserController::class, 'update']);
    Route::get('riwayat-konversi-poin', [DashboardUserController::class, 'konversi_poin'])->name('riwayat-konversi-poin');
    Route::get('riwayat-konversi-poin/detail/{id}', [DashboardUserController::class, 'detail_konversi_poin']);
    Route::get('edit-profil', [UpdateProfilController::class, 'index'])->name('user.edit-profil');
    Route::post('edit-profil', [UpdateProfilController::class, 'update']);
    Route::post('penukaran-sampah/detail/{id}/rating', [DashboardUserController::class, 'waste_rating'])->name('waste_rating');
    Route::post('penukaran-produk/detail/{id}/rating', [DashboardUserController::class, 'product_rating'])->name('product_exchange_rating');
});

Route::prefix('admin')->middleware(['auth', 'ensureRole:admin'])->group(function () {
    Route::get('data-blog', [PengelolaanBlogController::class, 'index'])->name('admin.data-blog');
    Route::get('data-blog/create', [PengelolaanBlogController::class, 'create']);
    Route::post('data-blog/create', [PengelolaanBlogController::class, 'store']);
    Route::get('data-blog/detail/{id}', [PengelolaanBlogController::class, 'detail']);
    Route::post('data-blog/detail/{id}', [PengelolaanBlogController::class, 'update']);
    Route::post('data-blog/delete/{id}', [PengelolaanBlogController::class, 'delete']);
});
