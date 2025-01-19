<?php

use App\Modules\DoctorAppointmentManagement\Services\AppointmentManagementService;

class AppointmentController
{
  public function __construct(private AppointmentManagementService $appointmentManagementService)
  {
      $this->appointmentManagementService = $appointmentManagementService;
  }

  public function getUpcomingAppointments()
  {
    $appointments = $this->appointmentManagementService->getUpcomingAppointments(1);
    return response()->json($appointments); 
  }

  public function markAsCompleted($id)
  {
    $result = $this->appointmentManagementService->markAsCompleted($id);
    return response()->json('message','updated successfully');
  }

  public function cancel($id)
  {
    $result = $this->appointmentManagementService->cancel($id);
    return response()->json('message','updated successfully');
  }


}