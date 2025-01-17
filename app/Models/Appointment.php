<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'slot_id', 
        'patient_id', 
        'patient_name', 
        'reserved_at', 
    ];
}
