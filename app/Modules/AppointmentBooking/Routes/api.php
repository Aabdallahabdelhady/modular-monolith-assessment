<?php

use App\Modules\AppointmentBooking\Controllers\AppointmentBookingController;
use Illuminate\Support\Facades\Route;

Route::get('/slots-available',[AppointmentBookingController::class, 'getAvailableSlots']);
Route::post('/appintments/book',[AppointmentBookingController::class, 'bookAppointment']);

