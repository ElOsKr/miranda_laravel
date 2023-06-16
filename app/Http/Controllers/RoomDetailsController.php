<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
            $availablesRooms = Room::select('room_id')
            ->whereNotIn('room_id',Booking::select('room_id')
                ->where("booking_checkin",">=",$checkIn)->where("booking_checkin","<=",$checkOut)
                ->orWhere("booking_checkout",">=",$checkIn)->where("booking_checkout","<=",$checkOut)
                ->orWhere("booking_checkin",">=",$checkIn)->where("booking_checkout","<=",$checkOut)
                ->orWhere("booking_checkin","<=",$checkIn)->where("booking_checkout",">=",$checkOut)
            )->get();

            foreach($availablesRooms as $key){
                if($key['room_id'] === $id){
                    $availability = true;
                    break;
                }
            }

            if($availability === true){
                return back()->with('success', "The room is available between $checkIn and $checkOut");
            }  
            return back()->with('success', "The room is not available between $checkIn and $checkOut");

        }catch(ModelNotFoundException $e){
            return view('rooms',[
                'failRoom' => "No room available"
            ]);
        }
    }
}
