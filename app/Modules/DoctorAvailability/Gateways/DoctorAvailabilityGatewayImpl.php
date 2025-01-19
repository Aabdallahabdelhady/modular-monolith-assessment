<?php
namespace App\Modules\DoctorAvailability\Gateways;

use App\Modules\DoctorAvailability\Gateways\DoctorAvailabilityGateway;
use App\Modules\Shared\Models\Slot;

class DoctorAvailabilityGatewayImpl implements DoctorAvailabilityGateway
{
  public function getAvailableSlots(): array
  {
      return Slot::where('is_reserved', false)->get()->toArray();
  }
}