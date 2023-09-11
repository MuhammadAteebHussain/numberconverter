<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberConverterController;



Route::middleware(['language-detection'])->group(function () {
    Route::post('/convert', [NumberConverterController::class, 'convert'])->name('convert');
});
Route::get('/result', [NumberConverterController::class, 'result'])->name('result');
Route::get('/', [NumberConverterController::class, 'index'])->name('index');
