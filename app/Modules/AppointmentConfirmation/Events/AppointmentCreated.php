<?php
namespace App\Modules\AppointmentConfirmation\Events;

use App\Modules\Shared\Models\Appointment;

class AppointmentCreated
{
    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }
}