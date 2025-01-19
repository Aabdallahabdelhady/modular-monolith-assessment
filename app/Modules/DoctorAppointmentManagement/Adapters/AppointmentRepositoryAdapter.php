<?php

namespace App\Modules\DoctorAppointmentManagement\Adapters;
use App\Modules\DoctorAppointmentManagement\Ports\AppointmentRepositoryPort;
use App\Modules\Shared\Models\Appointment;

class AppointmentRepositoryAdapter implements AppointmentRepositoryPort
{
    public function getUpcomingAppointments(string $doctorId): array
    {
        return Appointment::where('slot.doctor_id', $doctorId)
            ->where('reserved_at', '>', now())
            ->get()
            ->toArray();
    }

    public function markAsCompleted(string $appointmentId): void
    {
        Appointment::find($appointmentId)->update(['status' => 'completed']);
    }

    public function cancel(string $appointmentId): void
    {
        Appointment::find($appointmentId)->delete();
    }
}