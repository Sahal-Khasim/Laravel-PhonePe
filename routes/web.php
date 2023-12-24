<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonePe;


Route::get('/', [PhonePe::class, 'phonePePayment'])->name('phonepe');
Route::post('/redirct-url', [PhonePe::class, 'callBackAction'])->name('phonepe.callback');
