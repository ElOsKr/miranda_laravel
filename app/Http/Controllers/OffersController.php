<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OffersController extends Controller
{
    public function getOffersRooms(): View{
        $bestOffers = Room::orderByDesc('room_offer')->take(5)->get();
        $popularRooms = Room::orderBy('room_price')->take(5)->get();
        return view('offers',[
            'offers' => $bestOffers,
            'populars' => $popularRooms
        ]);
    }
}
