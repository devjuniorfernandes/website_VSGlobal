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
    }

    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'date' => 'required|string',
            'passport_number' => 'required|string',
            'phone_number' => 'required|string',
            'subject' => 'required|string',
            'description' => 'required|string',
        ]);

        // Save Justification
        $booking = Booking::Create([
            'user_id' => auth()->user()->id,
            'date' => $attrs['date'],
            'passport_number' => $attrs['passport_number'],
            'phone_number' => $attrs['phone_number'],
            'subject' => $attrs['subject'],
            'description' => $attrs['description'],
            'status' => 0,
        ]);

        return response([
            'message' => 'Agendamento criado com sucesso!',
            'booking' => $booking
        ], 200);
    }

    // Get Single Schadules
    public function show($id)
    {
        return response([
            'booking' => Booking::where('id', $id)->with('user')->first()
        ]);
    }

    // Get Single Schadules
    public function list()
    {
        $id_user = auth()->user()->id;
        return response([
            'bookings' => Booking::where('user_id', $id_user)->with('user')->get()
        ]);
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response([
                'message' => 'Agendamento não encontrado!'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'status' => 'required|integer'
        ]);

        $booking->update([
            'status' =>  $attrs['status']
        ]);

        // for now skip for post image

        return response([
            'message' => 'Agendamento não encontrado!.',
            'booking' => $booking
        ], 200);
    }

    //delete post
    public function destroy($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response([
                'message' => 'Agendamento não encontrado!'
            ], 403);
        }

        if ($booking->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada!'
            ], 403);
        }

        $booking->delete();

        return response([
            'message' => 'Agendamento Apagado com sucesso!'
        ], 200);
    }
}
