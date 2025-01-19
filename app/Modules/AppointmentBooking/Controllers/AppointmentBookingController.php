<?php
namespace App\Modules\AppointmentBooking\Controllers;

use App\Modules\AppointmentBooking\Cases\CreateAppointmentUseCase;
use App\Modules\DoctorAvailability\Gateways\DoctorAvailabilityGateway;
use CreateAppointmentRequest;

class AppointmentBookingController
{
  public function __construct(
    private DoctorAvailabilityGateway $doctorAvailabilityGateway
    )
{
    $this->doctorAvailabilityGateway = $doctorAvailabilityGateway;
}

  public function getAvailableSlots()
  {
    return $this->doctorAvailabilityGateway->getAvailableSlots();
  }

  public function bookAppointment(
  CreateAppointmentRequest $request,
  CreateAppointmentUseCase $createAppointmentUseCase)
  {
    $result = $createAppointmentUseCase->execute($request->validated());
    return response()->json('message','appointment booked successfully');
  }
}