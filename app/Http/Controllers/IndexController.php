<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function view(): View {
        return view('index',[
            'rooms' => Rooms::take(5)->get()
        ]);    
    }
}
