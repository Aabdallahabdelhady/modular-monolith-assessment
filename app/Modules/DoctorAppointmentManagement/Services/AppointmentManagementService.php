<?php
namespace App\Modules\DoctorAppointmentManagement\Services;

use App\Modules\DoctorAppointmentManagement\Ports\AppointmentRepositoryPort;

class AppointmentManagementService
{
  public function __construct(private AppointmentRepositoryPort  $appointmentRepositoryPort)
  {
    $this->appointmentRepositoryPort = $appointmentRepositoryPort;
  }

  public function getUpcomingAppointments($doctorId)
  {
    return $this->appointmentRepositoryPort->getUpcomingAppointments($doctorId);
  }

  public function markAsCompleted($appointmentId)
  {
    return $this->appointmentRepositoryPort->markAsCompleted($appointmentId);
  }

  public function cancel($appointmentId)
  {
    return $this->appointmentRepositoryPort->cancel($appointmentId);
  }

  
}