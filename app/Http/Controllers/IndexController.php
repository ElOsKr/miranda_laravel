<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function view(): View {
        return view('index',[
            'rooms' => Room::take(5)->get()
        ]);    
    }
}
