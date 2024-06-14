<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FairController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ExhibitionController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\DashboardController; // Asigură-te că acest controller există

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home.index'); // Asigură-te că acest fișier de vizualizare există
})->name('home');

Route::get('galleries', function () {
    return view('artworks.galleries'); // Asigură-te că acest fișier de vizualizare există
})->name('galleries');

Route::get('exhibitions', function () {
    return view('exhibitions.index'); // Asigură-te că acest fișier de vizualizare există
})->name('exhibitions.index');

Route::get('news', function () {
    return view('news.index'); // Asigură-te că acest fișier de vizualizare există
})->name('news.index');

Route::get('fairs', [FairController::class, 'index'])->name('fairs.index');

Route::get('about', function () {
    return view('about'); // Asigură-te că acest fișier de vizualizare există
})->name('about');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('galleries', GalleryController::class);
    Route::resource('exhibitions', ExhibitionController::class);
    Route::resource('news', NewsController::class);
    Route::resource('fairs', FairController::class);

    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('exhibitions/create', [ExhibitionController::class, 'create'])->name('exhibitions.create');
    Route::get('exhibitions/{exhibition}/edit', [ExhibitionController::class, 'edit'])->name('exhibitions.edit');
    Route::get('exhibitions/{exhibition}', [ExhibitionController::class, 'show'])->name('exhibitions.show');
    Route::delete('exhibitions/{exhibition}', [ExhibitionController::class, 'destroy'])->name('exhibitions.destroy');
});
