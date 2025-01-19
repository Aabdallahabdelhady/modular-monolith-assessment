<?php
namespace App\Modules\Shared\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $fillable = [
        'time', 
        'doctor_id', 
        'doctor_name', 
        'is_reserved', 
        'cost', 
    ];
}
