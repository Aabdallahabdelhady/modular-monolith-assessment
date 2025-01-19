<?php 
namespace App\Modules\AppointmentConfirmation\Gateways;

use App\Modules\AppointmentConfirmation\Events\AppointmentCreated;
use AppointmentConfirmationGateway;
use Illuminate\Console\Scheduling\Event;

class AppointmentConfirmationGatewayImpl implements AppointmentConfirmationGateway
{
  public function dispatchAppointmentCreatedEvent($appointment): void
  {
      Event::dispatch(new AppointmentCreated($appointment));
  }
}