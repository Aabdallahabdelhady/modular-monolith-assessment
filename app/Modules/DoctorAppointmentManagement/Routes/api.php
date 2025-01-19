<?php

use App\Modules\DoctorAvailability\Controllers\SlotController;
use Illuminate\Support\Facades\Route;

Route::get('appointments/upcoming',[AppointmentController::class, 'getUpcomingAppointments']);
Route::post('appointments/complete/{appointment}',[AppointmentController::class, 'markAsCompleted']);
Route::post('appointments/cancel/{appointment}',[AppointmentController::class, 'cancel']);

