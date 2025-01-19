<?php

use App\Modules\Shared\Models\Appointment;

interface AppointmentConfirmationGateway 
{
    public function  dispatchAppointmentCreatedEvent(Appointment $appointment);
}