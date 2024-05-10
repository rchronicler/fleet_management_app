<?php

use App\Http\Controllers\BookingController;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;

Route::redirect('/', '/dashboard');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('dashboard/book', function () {
        return view('dashboard.book', [
            // get all vehicles that the ids aren't in table bookings
            'vehicles' => Vehicle::whereNotIn('vehicle_id', function ($query) {
                $query->select('vehicle_id')->from('bookings');
            })->get(),

            // get all drivers that the ids aren't in the table bookings
            'drivers' => Driver::whereNotIn('driver_id', function ($query) {
                $query->select('driver_id')->from('bookings');
            })->get(),

            // get all users with the role 'supervisor'
            'supervisors' => User::where('role', 'supervisor')->get(),

            // get all users with the role 'manager'
            'managers' => User::where('role', 'manager')->get(),

        ]);
    });

    Route::post('dashboard/book', [BookingController::class, 'store']);

    Route::get('dashboard/bookings', function () {
        return view('dashboard.bookings', [
            // get all bookings with the driver name and vehicle license plate
            'bookings' => Booking::select('bookings.*', 'drivers.driver_name as driver_name', 'vehicles.vehicle_license_plate as vehicle', 'vehicles.vehicle_model as model', 'booking_approvals.approval_status as status')
                ->join('drivers', 'drivers.driver_id', '=', 'bookings.driver_id')
                ->join('vehicles', 'vehicles.vehicle_id', '=', 'bookings.vehicle_id')
                ->join('booking_approvals', 'booking_approvals.booking_id', '=', 'bookings.booking_id')
                ->get()
        ]);
    });

    Route::get('dashboard/reports', function () {
        return view('dashboard.reports');
    });
});
