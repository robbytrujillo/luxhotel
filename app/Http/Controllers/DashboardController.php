<?php

namespace App\Http\Controllers;

use App\Models\HotelBooking;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function my_bookings() {
        $user = Auth::user();
        $mybookings = HotelBooking::with([

        ]);
    }
}