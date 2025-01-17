<?php
namespace App\Modules\AppointmentBooking\Infrastructure;

use App\Models\Appointment;
use App\Modules\AppointmentBooking\Repository\AppointmentRepositoryInterface;
use App\Modules\AppointmentConfirmation\Events\AppointmentCreated;
use Illuminate\Console\Scheduling\Event;

class AppointmentRepository implements AppointmentRepositoryInterface 
{
  public function create(array $data): Appointment
  {
    $appointment = Appointment::create($data);
    Event::dispatch(new AppointmentCreated($appointment));
    return $appointment;
  }
}