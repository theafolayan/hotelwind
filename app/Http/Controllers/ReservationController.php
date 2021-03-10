<?php

namespace App\Http\Controllers;

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
        dd($request->all());
    }
}
