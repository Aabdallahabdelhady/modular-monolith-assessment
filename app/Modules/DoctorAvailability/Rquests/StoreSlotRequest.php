<?php
namespace App\Modules\DoctorAvailability\Rquests;


use Illuminate\Foundation\Http\FormRequest;

class StoreSlotRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'time' => 'required|date_format',
          'doctor_id' => 'required', 
          'doctor_name' => "required", 
          'is_reserved' => 'required|boolean', 
          'cost' => 'required|decimal', 
        ];
    }
}
