<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomsController extends Controller
{
    public function getRoom(string $id): View {
        return  view('roomDetails',[
            'room' => Rooms::findOrFail($id)
        ]);
    }

    public function view($numberRooms = "all"): View {
        if($numberRooms === "all"){
            return view('rooms',[
                'rooms' => Rooms::all()
            ]);    
        }else{
            return view('rooms',[
                'rooms' => Rooms::take($numberRooms)
            ]);            
        }
    }
}
