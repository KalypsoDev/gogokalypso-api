<?php
//API Routes
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::controller(NoteController::class)->group(function () {
    Route::get('/notes', 'index');
    Route::post('/note', 'store');
    Route::get('/note/{id}', 'show');
    Route::put('/note/{id}', 'update');
    Route::delete('/note/{id}', 'destroy');
});
