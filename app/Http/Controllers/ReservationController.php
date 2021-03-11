<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Room $room)
    {
        // dd($room->name);
        return view('pages.reservations.create')->withRoom($room);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'occupant_name' => 'required|min:5|max:40',
                'occupant_age' => 'required|max:3',
                'occupant_address' => 'required|min:15|max:300',
                'occupant_phone_number' => 'required|min:10|max:15',
                'room_id' => 'required|min:1|max:6',

            ]
            );

            Reservation::create($request->all());

            return redirect()->route('rooms.index');    
    }
}
