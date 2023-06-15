<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\RoomDetailsController;
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

Route::get('/', [IndexController::class,'view']);

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact',[ContactController::class,'contactCreate']);

Route::get('/rooms', [RoomsController::class,'view']);

Route::get('/offers', [OffersController::class,'getOffersRooms']);

Route::get('/roomDetails/{id}', [RoomDetailsController::class,'getRoom']);

Route::post('/roomDetails/{id}', [RoomDetailsController::class,'checkAvailavility']);
