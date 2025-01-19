<?php
namespace App\Modules\AppointmentBooking\Entities;


class Appointment
{
    public string $slotId;
    public string $patientId;
    public string $patientName;
    public string $reservedAt;

    public function __construct(
        string $slotId,
        string $patientId,
        string $patientName,
        string $reservedAt
    ) {
        $this->slotId = $slotId;
        $this->patientId = $patientId;
        $this->patientName = $patientName;
        $this->reservedAt = $reservedAt;
    }
}