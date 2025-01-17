<?php

use App\Models\Slot;
use App\Modules\DoctorAvailability\Contracts\SlotAvailabilityInterface;

class SlotAvailability implements SlotAvailabilityInterface
{
  public function getAvailableSlots(): array
  {
      return Slot::where('is_reserved', false)->get()->toArray();
  }
}