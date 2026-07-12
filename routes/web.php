<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Modular Team Routes
|--------------------------------------------------------------------------
| Setiap developer menambahkan file route sesuai tanggung jawabnya.
*/

if (file_exists(__DIR__.'/rapid.php')) {
    require __DIR__.'/rapid.php';
} else {
    Route::view('/', 'welcome')->name('home');
}

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}

if (file_exists(__DIR__.'/angel.php')) {
    require __DIR__.'/angel.php';
}

Route::fallback(function () {
    return response()->view(
        view()->exists('not-found') ? 'not-found' : 'not-found-basic',
        [],
        404
    );
});
