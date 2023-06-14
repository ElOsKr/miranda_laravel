<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactCreate(Request $request): RedirectResponse {
        return back()->with('success', 'test form');
    }
}
