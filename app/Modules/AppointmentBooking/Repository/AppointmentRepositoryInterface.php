<?php
namespace App\Modules\AppointmentBooking\Repository;

use App\Models\Appointment;

interface AppointmentRepositoryInterface
{
  public function create(array $data): Appointment;
}