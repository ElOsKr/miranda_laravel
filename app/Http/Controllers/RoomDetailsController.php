<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomDetailsController extends Controller
{
    public function getRoom(string $id): View {
        try{
            $room = Room::findOrFail($id);
            $relatedRooms = Room::where('room_type', $room['room_type'])
            ->where('room_id',"!=",$room['room_id'])
            ->get();
            return view("roomDetails",[
                'room' => $room,
                'relatedRooms' => $relatedRooms
            ]);            
        }catch(ModelNotFoundException $e){
            return view('rooms',[
                'failRoom' => "No room available"
            ]);
        }
    }
}
