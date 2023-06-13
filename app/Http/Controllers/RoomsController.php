<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomsController extends Controller
{
    public function show(string $id): View {
        return  view('roomDetails',[
            'id' => Rooms::findOrFail($id)
        ]);
    }
}
