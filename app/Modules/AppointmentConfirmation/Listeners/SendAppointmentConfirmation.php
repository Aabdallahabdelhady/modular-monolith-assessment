<?php
namespace App\Modules\AppointmentConfirmation\Listeners;

use App\Modules\AppointmentConfirmation\Events\AppointmentCreated;
use Illuminate\Support\Facades\Log;

class SendAppointmentConfirmation
{
    public function handle(AppointmentCreated $event): void
    {
        $appointment = $event->appointment;

        // Notify the patient
        $patientMessage = "Dear {$appointment->patient_name}, your appointment with Dr. {$appointment->slot->doctor_name} is confirmed for {$appointment->slot->time}.";
        Log::info("Patient Notification: {$patientMessage}");

        // Notify the doctor
        $doctorMessage = "Dr. {$appointment->slot->doctor_name}, you have a new appointment with {$appointment->patient_name} on {$appointment->slot->time}.";
        Log::info("Doctor Notification: {$doctorMessage}");
    }
}