<?php
namespace App\Modules\DoctorAppointmentManagement\Ports;

interface AppointmentRepositoryPort
{
    public function getUpcomingAppointments(string $doctorId): array;
    public function markAsCompleted(string $appointmentId): void;
    public function cancel(string $appointmentId): void;
}