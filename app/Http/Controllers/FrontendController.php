<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class FrontendController extends Controller
{
    public function showSingleRoom($id)
    {
        $room = Room::findOrFail($id);
        // dd($room);
        return view('pages.rooms.frontend.single-room')->withRoom($room);
    }
}
