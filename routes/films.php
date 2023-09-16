<?php

use Illuminate\Support\Facades\Route;



Route::middleware('admin')->group(function() {
    Route::post('films', App\Http\Controllers\Films\StoreController::class)->name('films.store');
    Route::get('films/create', App\Http\Controllers\Films\CreateController::class)->name('films.create');

    Route::delete('films/{film}', App\Http\Controllers\Films\DeleteController::class)->name('films.delete');

    Route::get('films/{film}/edit', App\Http\Controllers\Films\EditController::class)->name('films.edit');
    Route::put('films/{film}', App\Http\Controllers\Films\UpdateController::class)->name('films.update');

    Route::get('films/restore', App\Http\Controllers\Films\RestoreIndexController::class)->name('films.restore.index');
    Route::put('films/restore/{film}', App\Http\Controllers\Films\RestoreUpdateController::class)->name('films.restore.update');
    Route::delete('films/restore/{film}', App\Http\Controllers\Films\RestoreDeleteController::class)->name('films.restore.delete');
});

Route::get('/films', App\Http\Controllers\Films\IndexController::class)->name('films.index');
Route::get('/films/{film}', App\Http\Controllers\Films\ShowController::class)->name('films.show');


