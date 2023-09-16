<?php


use Illuminate\Support\Facades\Route;

Route::middleware('admin')->group( function () {
    Route::get('/entities/create', App\Http\Controllers\Entities\CreateController::class)->name('entities.create');
    Route::post('/entities', App\Http\Controllers\Entities\StoreController::class)->name('entities.store');

    Route::get('/entities/edit', App\Http\Controllers\Entities\EditController::class)->name('entities.edit');
    Route::put('/entities', App\Http\Controllers\Entities\UpdateController::class)->name('entities.update');

    Route::get('/entities/delete', App\Http\Controllers\Entities\GetDeleteController::class)->name('entities.get_delete');
    Route::delete('/entities', App\Http\Controllers\Entities\DeleteController::class)->name('entities.delete');
});
