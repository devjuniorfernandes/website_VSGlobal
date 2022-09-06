<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    // Get Single Schadules
    public function show($id)
    {
        return response([
            'booking' => Booking::where('id', $id)->with('user')->first()
        ]);
    }

       // Get Single Schadules
    public function list($id)
    {
        return response([
            'bookings' => Booking::where('user_id', $id)->with('user')->get()
        ]);
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(Request $request, Booking $booking)
    {
        //
    }

    public function destroy(Booking $booking)
    {
        //
    }
}
