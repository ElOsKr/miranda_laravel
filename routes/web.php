<?php

use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/rooms/{id}', [RoomsController::class,'show']);
