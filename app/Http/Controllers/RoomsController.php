<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomsController extends Controller
{
    public function view($numberRooms = "all"): View {
        if($numberRooms === "all"){
            return view('rooms',[
                'rooms' => Room::all()
            ]);    
        }else{
            return view('rooms',[
                'rooms' => Room::take($numberRooms)
            ]);            
        }
    }
}
