<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingApproval extends Model
{
    use HasFactory;
    protected $fillable = [
        'approval_status',
        'approval_date',
        'approval_level',
        'booking_id',
        'approver1_id',
        'approver2_id',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
