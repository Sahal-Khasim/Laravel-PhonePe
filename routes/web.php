<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonePeController;



Route::get('/', [PhonePeController::class, 'phonePePayment'])->name('phonepe');
Route::post('/redirct-url', [PhonePeController::class, 'callBackAction'])->name('phonepe.callback');
