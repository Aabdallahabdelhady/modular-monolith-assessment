<?php
namespace App\Modules\AppointmentBooking\Repository;

use App\Modules\AppointmentBooking\Entities\Appointment as EntitiesAppointment;
use App\Modules\Shared\Models\Appointment;

interface AppointmentRepositoryInterface
{
  public function create(EntitiesAppointment $appointment): Appointment;
}