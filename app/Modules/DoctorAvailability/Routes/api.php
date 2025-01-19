<?php

use App\Modules\DoctorAvailability\Controllers\SlotController;
use Illuminate\Support\Facades\Route;

Route::get('/slots',[SlotController::class, 'index']);
Route::post('/slots',[SlotController::class, 'store']);

