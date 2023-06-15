<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RoomDetailsController extends Controller
{

    static function relatedRooms(string $id){
        $room = Room::findOrFail($id);
        $relatedRooms = Room::where('room_type', $room['room_type'])
        ->where('room_id',"!=",$room['room_id'])
        ->get();
        return $relatedRooms;
    }

    public function getRoom(string $id): View {
        try{
            $room = Room::findOrFail($id);
            $relatedRooms = RoomDetailsController::relatedRooms($id);
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

    public function checkAvailavility(string $id, Request $request): RedirectResponse {
        try{
            $checkIn = $request->input('checkIn');
            $checkOut = $request->input('checkOut');
            $availability = false;
            $room = Room::findOrFail($id);
            $relatedRooms = RoomDetailsController::relatedRooms($id);
            $availablesRooms = Room::select(DB::raw(
                "*"))->where(DB::raw(" 
                    room_id not in(select room_id from bookings where
                                booking_checkin > $checkIn and booking_checkin < $checkOut or
                                booking_checkout > $checkIn and booking_checkout < $checkOut or
                                booking_checkin > $checkIn and booking_checkout < $checkOut or
                                booking_checkin < $checkIn and booking_checkout > $checkOut
                            )")
            )->get();
            foreach($availablesRooms as $individualRoom){
                if($individualRoom['room_id'] === $id){
                    $availability = true;
                }
            }

            return back()->with('success', 'Check');    

        }catch(ModelNotFoundException $e){
            return view('rooms',[
                'failRoom' => "No room available"
            ]);
        }
    }
}
