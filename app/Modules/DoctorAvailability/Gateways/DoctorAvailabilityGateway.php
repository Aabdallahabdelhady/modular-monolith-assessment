<?php
namespace App\Modules\DoctorAvailability\Gateways;

interface DoctorAvailabilityGateway
{
  public function getAvailableSlots(): array;
}