<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\RoomsController;

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

Route::get('/', [IndexController::class,'view'])->middleware(['auth','verified'])->name("/");

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->middleware(['auth','verified'])->name("/");

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth','verified'])->name("/");

Route::post('/contact',[ContactController::class,'contactCreate'])->middleware(['auth','verified'])->name("/");

Route::get('/rooms', [RoomsController::class,'view'])->middleware(['auth','verified'])->name("/");

Route::post('/rooms',[RoomsController::class, 'getAvailables'])->middleware(['auth','verified'])->name("/");

Route::get('/offers', [OffersController::class,'getOffersRooms'])->middleware(['auth','verified'])->name("/");

Route::get('/roomDetails/{id}', [RoomDetailsController::class,'getRoom'])->middleware(['auth','verified'])->name("/");

Route::post('/roomDetails/{id}', [RoomDetailsController::class,'checkAvailavility'])->middleware(['auth','verified'])->name("/");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
