<?php
namespace App\Modules\DoctorAvailability\Contracts;

interface SlotAvailabilityInterface
{
  public function getAvailableSlots(): array;
}