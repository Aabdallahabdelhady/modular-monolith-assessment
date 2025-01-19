<?php

use Illuminate\Http\Request;

class CreateAppointmentRequest extends Request
{
  public function authorize(): bool
  {
      return true;
  }

  public function rules(): array
  {
      return [
          'doctor_id' => 'required|exists:doctors,id',
          'patient_id' => 'required|exists:patients,id',
          'slot_id' => 'required|exists:slots,id',
          'patientName' => 'required',
      ];
  }
}