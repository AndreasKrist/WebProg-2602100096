<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\WriterController;

Route::get('/', [DetailController::class, 'index'])->name('home');

Route::get('/home', [DetailController::class, 'index'])->name('home');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');

Route::get('/popular', [DetailController::class, 'popular'])->name('materi.popular');

Route::prefix('/category')->group(function () {
    Route::get('/{categoryId}', [CategoryController::class, 'index'])->name('category');
    Route::get('/{categoryId}/detail/{detailId}', [DetailController::class, 'detail'])->name('materi.detail');
});

Route::prefix('/writer')->group(function () {
    Route::get('/', [WriterController::class, 'index'])->name('writer');
    Route::get('/{writerId}', [WriterController::class, 'detail'])->name('writer.detail');
});