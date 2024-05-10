<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_date',
        'return_date',
        'purpose',
        'vehicle_id',
        'driver_id'
    ];

    public function approval()
    {
        return $this->hasOne(BookingApproval::class);
    }
}
