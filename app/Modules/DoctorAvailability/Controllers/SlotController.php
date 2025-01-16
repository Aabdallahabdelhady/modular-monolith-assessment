<?php
namespace App\Modules\DoctorAvailability\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\DoctorAvailability\Rquests\StoreSlotRequest;
use App\Modules\DoctorAvailability\Services\SlotService;
use Illuminate\Http\JsonResponse;

class SlotController extends Controller
{
  public function __construct(private SlotService $slotService)
  {
      $this->slotService = $slotService;
  }

  public function index(): JsonResponse
  {
      $slots = $this->slotService->getAllSlots();
      return response()->json($slots);
  }

  public function store(StoreSlotRequest $request): JsonResponse
  {
      $slot = $this->slotService->createSlot($request->validated());
      return response()->json($slot, 201);
  }
}
