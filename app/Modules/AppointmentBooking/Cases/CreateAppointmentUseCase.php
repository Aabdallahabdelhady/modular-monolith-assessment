<?php
namespace App\Modules\AppointmentBooking\Cases;

use App\Modules\AppointmentBooking\Entities\Appointment;
use App\Modules\AppointmentBooking\Repository\AppointmentRepositoryInterface;
class CreateAppointmentUseCase
{
    public function __construct(private AppointmentRepositoryInterface $AppointmentRepositoryInterface)
    {
        $this->AppointmentRepositoryInterface = $AppointmentRepositoryInterface;
    }

    public function execute(array $data): void
    {
        $appointment = new Appointment(
            $data['id'],
            $data['slotId'],
            $data['patientId'],
            $data['patientName'],
            $data['reservedAt']
        );

        $this->AppointmentRepositoryInterface->create($appointment);
    }
}