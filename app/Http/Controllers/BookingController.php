<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingApproval;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'vehicle' => ['required'],
            'driver' => ['required'],
            'about' => ['required', 'max:255'],
            'start_datetime' => ['required', 'date'],
            'end_datetime' => ['required', 'date'],
            'approver1' => ['required'],
            'approver2' => ['required'],
        ]);


        $booking = Booking::create([
            'pickup_date' => request('start_datetime'),
            'return_date' => request('end_datetime'),
            'purpose' => request('about'),
            'vehicle_id' => request('vehicle'),
            'driver_id' => request('driver'),
        ]);

        $booking->approval()->create([
            'approval_status' => 'tertunda',
            'approval_date' => now(), // or another logic for the approval date
            'approval_level' => 1,
            'approver1_id' => request('approver1'),
            'approver2_id' => request('approver2'),
        ]);


        return redirect('/dashboard/bookings');
    }
}
