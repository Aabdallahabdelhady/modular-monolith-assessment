<?php
namespace App\Modules\DoctorAvailability\Services;

use App\Models\Slot;
use App\Modules\DoctorAvailability\Contracts\SlotAvailability;

class SlotService
{
    public function getAllSlots()
    {
        return Slot::where('doctor_id',1)->get();
    }

    public function createSlot(array $data): Slot
    {
        return Slot::create(array_merge($data,[
          'doctor_id' => 1 //assume that the current doctor id is 1
        ]));
    }

 
}