<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomsController extends Controller
{
    public function view(): View {
        return view('rooms',[
            'rooms' => Room::all()
        ]);
    } 
    
    
    public function getAvailables(Request $request): View {
        $checkIn = $request->input('arrivalDate');
        $checkOut = $request->input('departureDate');
        $message = "";
        $availablesRooms = Room::select('*')
        ->whereNotIn('room_id',Booking::select('room_id')
            ->where("booking_checkin",">=",$checkIn)->where("booking_checkin","<=",$checkOut)
            ->orWhere("booking_checkout",">=",$checkIn)->where("booking_checkout","<=",$checkOut)
            ->orWhere("booking_checkin",">=",$checkIn)->where("booking_checkout","<=",$checkOut)
            ->orWhere("booking_checkin","<=",$checkIn)->where("booking_checkout",">=",$checkOut)
        )->get();

        if(count($availablesRooms)>0){
            return view('rooms',[
                'rooms'=>$availablesRooms,
                'message' => $message = "Rooms available between $checkIn and $checkOut"
            ]);
        }else{
            return view('rooms',[
                'rooms'=> Room::all(),
                'message' => $message = "No rooms available between $checkIn and $checkOut. Displaying all rooms"
            ]);
        }
    }

}
