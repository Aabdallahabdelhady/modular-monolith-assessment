<?php
namespace App\Modules\AppointmentBooking\Infrastructure;

use App\Modules\AppointmentBooking\Entities\Appointment as EntitiesAppointment;
use App\Modules\AppointmentBooking\Repository\AppointmentRepositoryInterface;
use App\Modules\Shared\Models\Appointment;
use AppointmentConfirmationGateway;

class AppointmentRepository implements AppointmentRepositoryInterface 
{
  public function __construct(private AppointmentConfirmationGateway $appointmentConfirmationGateway)
  {
    $this->appointmentConfirmationGateway = $appointmentConfirmationGateway;
  }

  public function create($appointment): Appointment
  {
    $appointment = Appointment::create([
      'slot_id' => $appointment->slotId,
      'patient_id' => $appointment->patientId,
      'patient_name' => $appointment->patientName,
      'reserved_at' => $appointment->reservedAt,
    ]);
    $this->appointmentConfirmationGateway->dispatchAppointmentCreatedEvent($appointment);
    return $appointment;
  }
}