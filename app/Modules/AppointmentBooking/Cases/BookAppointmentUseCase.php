<?php
namespace App\Modules\AppointmentBooking\Cases;

  
  
  use App\Models\Appointment;
use App\Modules\AppointmentBooking\Repositories\SlotRepository;
use App\Modules\AppointmentBooking\Repository\AppointmentRepositoryInterface;
use App\Modules\DoctorAvailability\Contracts\SlotAvailabilityInterface;

class BookAppointmentUseCase
{
    public function __construct(
        private AppointmentRepositoryInterface $appointmentRepository,
        private SlotAvailabilityInterface $slotAvailability
        )
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->slotAvailability = $slotAvailability;
    }

    public function getAvailableSlots(): array
    {
        return $this->slotAvailability->getAvailableSlots();
    }

    public function create(array $data): Appointment
    {
        $slot = $this->appointmentRepository->create($data);
        return Appointment::create($data);
    }
}